function isEmpty(data) {
    if (data.length == 0)
        return true;
    else
        return false;
}

function validate(formularz) {
    var messageStart = "Pole ";
    var messageEnd = " jest Puste!";
    var ifCorrect = true;
    ifCorrect = checkStringAndFocus(formularz.elements["f_imie"], messageStart + "imie" + messageEnd) && ifCorrect
    ifCorrect = checkStringAndFocus(formularz.elements["f_nazwisko"], messageStart + "nazwisko" + messageEnd) && ifCorrect;
    ifCorrect = checkStringAndFocus(formularz.elements["f_nazwisko_p"], messageStart + "nazwisko panieńskie" + messageEnd) && ifCorrect;
    ifCorrect = checkStringAndFocus(formularz.elements["f_kod"], messageStart + "kod pocztowy" + messageEnd) && ifCorrect;
    ifCorrect = checkStringAndFocus(formularz.elements["f_miasto"], messageStart + "miasto" + messageEnd) && ifCorrect;
    ifCorrect = checkStringAndFocus(formularz.elements["f_ulica"], messageStart + "Ulica/Osiedle" + messageEnd) && ifCorrect;
    ifCorrect = checkStringAndFocus(formularz.elements["f_email"], messageStart + "e-mail" + messageEnd, checkEmail) && ifCorrect;
    return ifCorrect;
}

function isWhiteSpaceOrEmpty(str) {
    return /^[\s\t\r\n]*$/.test(str);
}


function checkEmail(str) {
    let email = /^[a-zA-Z_0-9\.]+@[a-zA-Z_0-9\.]+\.[a-zA-Z][a-zA-Z]+$/;
    if (!email.test(str)) {

        return true;
    }
    else {
        return false;
    }
}

function validateConst(str) {
    return false;
}

function checkStringAndFocus(obj, msg, validationFunction = validateConst) {
    let str = obj.value;
    let errorFieldName = "e_" + obj.name.substr(2, obj.name.length);
    if (obj.style.visibility == 'hidden') {
        return true
    }
    if (isWhiteSpaceOrEmpty(str)) {
        document.getElementById(errorFieldName).innerHTML = msg;
        obj.focus();
        return false;
    } else if (validationFunction(obj.value)) {
        document.getElementById(errorFieldName).innerHTML = "Wypełniono pole " + obj.name.substr(2, obj.name.length) + " w sposob niepoprawny!";
        obj.focus();
        return false;
    }
    else {
        document.getElementById(errorFieldName).innerHTML = "";
        obj.focus();
        return true;
    }
}

function hideField(id) {
    document.getElementById(id).style.visibility = 'hidden';
}

function showField(id) {
    document.getElementById(id).style.visibility = 'visible';
}

function alterRows(i, e) {
    if (e) {
        if (i % 2 == 1) {
            e.setAttribute("style", "background-color: Aqua;");
        }
        e = e.nextSibling;
        while (e && e.nodeType != 1) {
            e = e.nextSibling;
        } alterRows(++i, e);
    }
}

function nextNode(e) {
    while (e && e.nodeType != 1) {
        e = e.nextSibling;
    } return e;
}
function prevNode(e) {
    while (e && e.nodeType != 1) {
        e = e.previousSibling;
    } return e;
}
function swapRows(b) {
    let tab = prevNode(b.previousSibling);
    let tBody = nextNode(tab.firstChild);
    let lastNode = prevNode(tBody.lastChild);
    tBody.removeChild(lastNode);
    let firstNode = nextNode(tBody.firstChild);
    tBody.insertBefore(lastNode, firstNode);
}


function cnt(form, msg, maxSize) {
    if (form.value.length > maxSize)
        form.value = form.value.substring(0, maxSize);
    else
        msg.innerHTML = maxSize - form.value.length;
}