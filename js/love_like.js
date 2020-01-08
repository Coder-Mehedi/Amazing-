// from single.php Localized Data
const { template_path, post_id, user_id, permalink } = post_info

// DOM QUERY
const heart_container = document.querySelector('.heart-container')
// const result = document.getElementById('result')


// Cookie Setter Function
const setCookie = (cookie_name, cookie_value, expire_in_days) => {
        let d = new Date();
        d.setTime(d.getTime() + (expire_in_days * 24 * 60 * 60 * 1000));
        let expires = "expires="+ d.toUTCString();
        document.cookie = cookie_name  + "=" + cookie_value + ";" + expires + ";path=/";
    }

// Cookie Getter Function
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

let cookies = getCookie(post_id) == 'true' ? true : false

// Logged Out User Function
const getPostLikeLoggedOutUser = () => {
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
}

const setPostLikeLoggedOutUser = () => {
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
}

// Logged In User Function
const getPostLikeLoggedInUser = () => {
    jQuery.post(
        template_path+'/inc/post_like.php',  // URL
        { post_id , user_id, funcName: 'get_post_like'  }, // data to be submit
        function(data, status, jqXHR) {// success callback
            // console.log(JSON.parse(data))
            data = JSON.parse(data)
            let todo = null
            if(data.user_id == user_id && data.post_id == post_id){
                todo = data.liked
            }

            if(todo){
                heart_container.innerHTML = `<img class="red-heart" src="${template_path}/image/red_heart.png" alt="">`
            }else {
                heart_container.innerHTML = `<li class="heart"><a href="${permalink}#liked"></a></li>`
            }

            //result.append('data: ' + data);
        })
        .done(() => console.log('request done'))
        .fail((jqxhr, settings, ex) => alert('failed, ' + ex));
}

const setPostLikeLoggedInUser = () => {
    jQuery.post(
        template_path+'/inc/post_like.php',  // URL
        { post_id , user_id, funcName: 'set_post_like' }, // data to be submit
       function(data = '', status, jqXHR) {// success callback
            console.log(JSON.parse(data))
            data = JSON.parse(data)
            let todo = null
            if(data.user_id == user_id && data.post_id == post_id){
                todo = data.liked
            }

            if(todo){
                heart_container.innerHTML = `<img class="red-heart" src="${template_path}/image/red_heart.png" alt="">`
            }else {
                heart_container.innerHTML = `<li class="heart"><a href="${permalink}#liked"></a></li>`
            }

            // result.append('data: ' + data);
        }).done(() => console.log('request done'))
          .fail((jqxhr, settings, ex) => alert('failed, ' + ex));
}



// String to Boolean Conversion
// getCookie('loved') == 'true' ? true : false



// If User Not Logged In then using Cookie
if(user_id === '0'){
    
    getPostLikeLoggedOutUser();

    heart_container.addEventListener('click', () => {
        setPostLikeLoggedOutUser()
    })
}



// If User Is Logged In then Fetching From Database If The User Current Post Liked or Not
if(user_id !== '0'){
    getPostLikeLoggedInUser();

    heart_container.addEventListener('click', () => {
       setPostLikeLoggedInUser();
    })
}