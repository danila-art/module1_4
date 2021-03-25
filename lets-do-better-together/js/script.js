function get_cookie(cookie_name) {
    var results = document.cookie.match('(^|;) ?' + cookie_name + '=([^;]*)(;|$)');
    if (results)
        return (unescape(results[2]));
    else
        return null;
}

const userBlock = document.getElementById('userBlock');
userBlock.addEventListener('click', () => {
    if (get_cookie('') != null) {
        const moduleRegistrInput = document.getElementById('moduleRegistr').querySelectorAll('input');

    } else {

    }
})

function registrCheck() {
    if (/[а-я]/i.test(moduleRegistrInput[0].value)) {

    }
    if (/[a-z]/i.test(moduleRegistrInput[1].value)) {

    }
    if (moduleRegistrInput[2].value) { }
    if (moduleRegistrInput[3].value ) { }
    if (moduleRegistrInput[3].value === moduleRegistrInput[4].value) { }
}
