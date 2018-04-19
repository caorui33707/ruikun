var reg = {
    email: /^\w+([-+.']\w+([-.]\w+)*$)/,
    phone: /1[35478]\d{9}/,
    zipCode: /^\d{2,10}$/,
    email_phone: /(1[35478]\d{9})|(^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$)/,
    usercode: /^[a-zA-Z0-9]{4}$/
}

function addClass(obj, cls) {
    var obj_class = obj.className, //获取 class 内容.
        blank = (obj_class != '') ? ' ' : '', //判断获取到的 class 是否为空, 如果不为空在前面加个'空格'.
        added = obj_class + blank + cls; //组合原来的 class 和需要添加的 class.
    obj.className = added; //替换原来的 class.
}

function removeClass(obj, cls) {
    var obj_class = ' ' + obj.className + ' '; //获取 class 内容, 并在首尾各加一个空格. ex) 'abc    bcd' -> ' abc    bcd '
    obj_class = obj_class.replace(/(\s+)/gi, ' '), //将多余的空字符替换成一个空格. ex) ' abc    bcd ' -> ' abc bcd '
        removed = obj_class.replace(' ' + cls + ' ', ' '); //在原来的 class 替换掉首尾加了空格的 class. ex) ' abc bcd ' -> 'bcd '
    removed = removed.replace(/(^\s+)|(\s+$)/g, ''); //去掉首尾空格. ex) 'bcd ' -> 'bcd'
    obj.className = removed; //替换原来的 class.
}

function hasClass(obj, cls) {
    var obj_class = obj.className, //获取 class 内容.
        obj_class_lst = obj_class.split(/\s+/); //通过split空字符将cls转换成数组.
    x = 0;
    for (x in obj_class_lst) {
        if (obj_class_lst[x] == cls) { //循环数组, 判断是否包含cls
            return true;
        }
    }
    return false;
}

// 报错
function regError(_this, _msg) {
    var span = _this.sibling("span"),
        add = addClass(_this, "err_mes_on");
    add.innerHTML = _msg;
    addClass(_this.parentNode, "ip-par-error");
}

// 

function siblings(elm) {
    var a = [];
    var p = elm.parentNode.children;
    for (var i = 0, pl = p.length; i < pl; i++) {
        if (p[i] !== elm) a.push(p[i]);
    }
    return a;
}

function testMain(_this) {
    if (hasClass(_this, "skip")) {
        return "";
    }

    // 验证密码
    if (hasClass(_this, "pass-test")) {
        var length = _this.nodeValue.length;
        if (length < 6 || length > 2) {
            regError(_this, "请输入6到12个字符");
        }
    }

    // 验证电子邮箱电话
    if (hasClass(_this, "email-phone")) {
        var bol_email = reg.email_phone.test(_this.nodeValue);
        if (!bol_email) {
            regError(_this, "电子邮箱电话不能为空");
        }
    }

    // 验证码验证
    if (hasClass(_this, "code")) {
        var code = reg.usercode.test(_this.nodeValue);
        if (!code) {
            regError(_this, "验证码不能为空");
        }
    }

    // 验证邮箱
    if (hasClass(_this, "email-test")) {
        var email = reg.email.test(_this.nodeValue);
        if (!email) {
            regError(_this, "邮箱不能为空");
        }
    }

    // 验证手机号
    if (hasClass(_this, "phone-test")) {
        var email = reg.phone.test(_this.nodeValue);
        if (!email) {
            regError(_this, "手机号不能为空");
        }
    }

    // 验证密码是否一致
    if (hasClass(_this, "pass-again-test")) {
        var pass = document.getElementsByClassName("pass-test")[0].nodeValue;
        if (!email) {
            regError(_this, "密码不一致");
        }
    }
}