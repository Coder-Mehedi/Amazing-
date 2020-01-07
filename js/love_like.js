const { template_path, post_id, permalink } = post_info

const setCookie = (cookie_name, cookie_value, expire_in_days) => {
        let d = new Date();
        d.setTime(d.getTime() + (expire_in_days * 24 * 60 * 60 * 1000));
        let expires = "expires="+ d.toUTCString();
        document.cookie = cookie_name  + "=" + cookie_value + ";" + expires + ";path=/";
    }

const getCookie = (cookie_name) => {
    var name = cookie_name + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
          c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        }
    }
    return "";
}

getCookie('loved') == 'true' ? true : false
const heart = document.querySelector('.heart')
const heart_container = document.querySelector('.heart-container')
let cookies = getCookie(post_id) == 'true' ? true : false

heart_container.addEventListener('click', () => {
    cookies = !cookies

    if(cookies){
        heart_container.innerHTML = `<img class="red-heart" src="${template_path}/image/red_heart.png" alt="">`
        setCookie(post_id, true, 1)

        const newCookie = {id: post_id, loved: true}
        console.log(newCookie)
    }else {
        heart_container.innerHTML = `<li class="heart"><a href="${permalink}#liked"></a></li>`
        setCookie(post_id, false, 1)

        const newCookie = {id: post_id, loved: false}
        console.log(newCookie)
    }

    const result = document.getElementById('result')

    jQuery.ajax({
        type: "POST",
        url: template_path+'/inc/post_like.php',
        dataType: 'json',
        data: {functionName: 'set_post_like', id: post_id},

        success: function(result){
            result.innerHTML = result;
        }

    });

})

if(cookies){
    heart_container.innerHTML = `<img class="red-heart" src="${template_path}/image/red_heart.png" alt="">`
}else {
    heart_container.innerHTML = `<li class="heart"><a href="${permalink}#liked"></a></li>`
}


