function generateCode(length = 5, number = 1, type) {
    var length = length;
    if (type == 1) {
        var charset = "0123456789";
    } else if (type == 2) {
        var charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    } else if (type == 3) {
        var charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*@#$%!%^*&*@#";
    }

    if (number == 1) {
        var retVal = "";
        for (var i = 0, n = charset.length; i < length; ++i) {
            retVal += charset.charAt(Math.floor(Math.random() * n));
        }
        document.getElementById("discountCode").value = retVal;
        document.getElementById("generator").style.display = "block";
    } else {
        var codes = [];
        for (var j = 0; j < number; ++j) {
            var retVal = "";
            for (var c = 0, xn = charset.length; c < length; ++c) {
                retVal += charset.charAt(Math.floor(Math.random() * xn));
            }
            codes.push(retVal);
        }
        document.getElementById("discountCode").value = codes;
        document.getElementById("generator").style.display = "block";
    }

    document.getElementById("submitBtn").style.display = "block";
}

function multiCode(value) {
    if (value == 2) {
        document.getElementById("number").style.display = "block";
        document.getElementById("type").classList.remove('col-md-6');
        document.getElementById("type").classList.add('col-md-4');

    } else {
        document.getElementById("number").style.display = "none";
        document.getElementById("inputNumber").value = 1;
        document.getElementById("type").classList.remove('col-md-4');
        document.getElementById("type").classList.add('col-md-6');
    }

}


