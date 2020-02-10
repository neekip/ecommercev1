import KhaltiCheckout from "khalti-web";

// import * as KhaltiCheckout from "khalti-web"; ES6 import with alias
// var KhaltiCheckout = require("khalti-web"); CommonJs

let config = {
    // replace this key with yours
    "publicKey": "test_public_key_398ffb34203843f6a75a3d51a75a3489",
    "productIdentity": "1234567890",
    "productName": "Drogon",
    "productUrl": "http://gameofthrones.com/buy/Dragons",
    "eventHandler": {
        onSuccess (payload) {
            // hit merchant api for initiating verfication
            $.ajax({
                url: "{{url('/payments/verification')}}",
                type: 'GET',

                data: {
                    amount: payload.amount,
                    trans_token: payload.token
                },
                success: function (res) {
                    console.log(res);
                },

                error: function (error) {
                    console.log("transaction failed");
                }
            })
            console.log(payload);
        },
        onError (error) {
            console.log(error);
        },
        onClose () {
            console.log('widget is closing');
        }
    }
};

let checkout = new KhaltiCheckout(config);
let btn = document.getElementById("payment-button");
btn.onclick = function () {
    checkout.show({amount: 1000});
}
