function pvalid() {
    let title = document.forms["pform"]["title"].value;
    let pdesc = document.forms["pform"]["pdesc"].value;
    let charge = document.forms["pform"]["charge"].value;

    if (title == "") {
        document.getElementById('msg1').innerHTML = "Service Title Required";
        return false;
    } else if (pdesc == "") {
        document.getElementById('msg2').innerHTML = "Service Description Required";
        return false;
    } else if (charge == "") {
        document.getElementById('msg3').innerHTML = "Rate Required";
        return false;
    } else {
        return true;
    }
}

function rvalid() {
    let username = document.forms["regform"]["username"].value;
    let password = document.forms["regform"]["password"].value;
    let email = document.forms["regform"]["email"].value;

    if (username == "") {
        document.getElementById('msg1').innerHTML = "Username Required";
        return false;
    } else if (email == "") {
        document.getElementById('msg2').innerHTML = "Email Required";
        return false;
    } else if (password == "") {
        document.getElementById('msg3').innerHTML = "Password Required";
        return false;
    } else {
        return true;
    }
}

function ovalid() {
    let pp = document.forms["onform"]["pp"].value;
    let fname = document.forms["onform"]["fname"].value;
    let bio = document.forms["onform"]["bio"].value;

    if (pp == "") {
        document.getElementById('msg1').innerHTML = "Profile Picture Required";
        return false;
    } else if (fname == "") {
        document.getElementById('msg2').innerHTML = "Full Name Required";
        return false;
    } else if (bio == "") {
        document.getElementById('msg3').innerHTML = "Bio Required";
        return false;
    } else {
        return true;
    }
}

function lvalid() {
    let username = document.forms["loginform"]["username"].value;
    let password = document.forms["loginform"]["password"].value;

    if (username == "") {
        document.getElementById('msg1').innerHTML = "Username Required";
        return false;
    } else if (password == "") {
        document.getElementById('msg2').innerHTML = "Password Required";
        return false;
    } else {
        return true;
    }
}

function prvalid() {
    let pp = document.forms["predit"]["pp"].value;
    let fname = document.forms["predit"]["fname"].value;
    let bio = document.forms["predit"]["bio"].value;

    if (pp == "") {
        document.getElementById('msg1').innerHTML = "Profile Picture Required";
        return false;
    } else if (fname == "") {
        document.getElementById('msg2').innerHTML = "Full Name Required";
        return false;
    } else if (bio == "") {
        document.getElementById('msg3').innerHTML = "Bio Required";
        return false;
    } else {
        return true;
    }
}

function evalid() {
    let title = document.forms["epform"]["title"].value;
    let pdesc = document.forms["epform"]["pdesc"].value;
    let charge = document.forms["epform"]["charge"].value;

    if (title == "") {
        document.getElementById('msg1').innerHTML = "Service Title Required";
        return false;
    } else if (pdesc == "") {
        document.getElementById('msg2').innerHTML = "Service Description Required";
        return false;
    } else if (charge == "") {
        document.getElementById('msg3').innerHTML = "Rate Required";
        return false;
    } else {
        return true;
    }
}

function typing() {
    document.getElementById('msg1').innerHTML = "";
    document.getElementById('msg2').innerHTML = "";
    document.getElementById('msg3').innerHTML = "";
}

function ajax1() {
    let username = document.getElementById('username').value;
    let http = new XMLHttpRequest();
    http.open('POST', '../controllers/amountcount.php', true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send('username=' + username);
    http.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('h6').innerHTML = this.responseText;
        }
    }
}

function ajax2() {
    let username = document.getElementById('username').value;
    let http = new XMLHttpRequest();
    http.open('POST', '../controllers/postcount.php', true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send('username=' + username);
    http.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('h5').innerHTML = this.responseText;
        }
    }
}

function ajax3() {
    let username = document.getElementById('username').value;
    let http = new XMLHttpRequest();
    http.open('POST', '../controllers/requestcount.php', true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send('username=' + username);
    http.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('h4').innerHTML = this.responseText;
        }
    }
}

function ajax4() {
    let username = document.getElementById('username').value;
    let http = new XMLHttpRequest();
    http.open('POST', '../controllers/profileupdatedata.php', true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send('username=' + username);
    http.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('update').innerHTML = this.responseText;
        }
    }
}

function ajax5() {
    let username = document.getElementById('username').value;
    let http = new XMLHttpRequest();
    http.open('POST', '../controllers/profiledetails.php', true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send('username=' + username);
    http.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('profiledetails').innerHTML = this.responseText;
        }
    }
}

function ajax6() {
    let username = document.getElementById('username').value;
    let http = new XMLHttpRequest();
    http.open('POST', '../controllers/postdata.php', true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send('username=' + username);
    http.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('posts').innerHTML = this.responseText;
        }
    }
}

function ajax7() {
    let username = document.getElementById('username').value;
    let http = new XMLHttpRequest();
    http.open('POST', '../controllers/notificationdata.php', true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send('username=' + username);
    http.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('notifications').innerHTML = this.responseText;
        }
    }
}

function ajax8() {
    let search = document.getElementById('search').value;
    let http = new XMLHttpRequest();
    http.open('POST', '../controllers/searchdata.php', true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send('search=' + search);
    http.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('result').innerHTML = this.responseText;
        }
    }
}

function reportvalid() {
    let title = document.getElementById('title').value;
    let provider = document.getElementById('provider').value;
    let reason = document.getElementById('reason').value;
    let reporter = document.getElementById('reporter').value;

    let http = new XMLHttpRequest();

    let reportdata = { 'postt': title, 'sp': provider, 'rr': reason, 'ru': reporter };
    let json = JSON.stringify(reportdata);
    http.open('POST', '../controllers/reportpost.php', true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send('data=' + json);
    http.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText);
            window.location = '../views/home.php';
        }
    }
}