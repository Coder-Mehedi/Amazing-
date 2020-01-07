const { template_path, post_id, user_id, permalink } = post_info

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
const result = document.getElementById('result')
let cookies = getCookie(post_id) == 'true' ? true : false

// if(cookies){
//     heart_container.innerHTML = `<img class="red-heart" src="${template_path}/image/red_heart.png" alt="">`
// }else {
//     heart_container.innerHTML = `<li class="heart"><a href="${permalink}#liked"></a></li>`
// }





if(user_id !== 0){
    jQuery.post(
        template_path+'/inc/post_like.php',  // URL
        { post_id , user_id, funcName: 'get_post_like'  }, // data to be submit
        function(data, status, jqXHR) {// success callback
            console.log(data)

            if(data){
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

            result.append('status: ' + status + ', data: ' + data);
        })
        .done(() => console.log('request done'))
        .fail((jqxhr, settings, ex) => alert('failed, ' + ex));


    heart_container.addEventListener('click', () => {
        cookies = !cookies
       
        jQuery.post(
            template_path+'/inc/post_like.php',  // URL
            { post_id , user_id, funcName: 'set_post_like' }, // data to be submit
           function(data, status, jqXHR) {// success callback

                if(data){
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

                result.append('status: ' + status + ', data: ' + data);
            }).done(() => console.log('request done'))
              .fail((jqxhr, settings, ex) => alert('failed, ' + ex));
    })
}