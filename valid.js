function validate() {
    var x = document.form1.text1.value;
    if (isNaN(x) || x.length != 10) {
        alert("Please enter 10 of digits a/c number!");
        return false;
    }

    x = document.form1.text2.value;
    if (x.length < 5) {
        alert("Please enter at least 7 characters of password!");
        return false;
    }

    var y = document.form1.text3.value;
    if (x != y) {
        alert("Please re-enter same values of password!");
        return false;
    }

    x = document.form1.text4.value;
    if (x.length < 2) {
        alert("Please enter correct name");
        return false;
    }

    x = document.form1.text6.value;
    if (isNaN(x) || x.length != 10) {
        alert("Please enter 10 digits of mobile number!");
        return false;
    }

}