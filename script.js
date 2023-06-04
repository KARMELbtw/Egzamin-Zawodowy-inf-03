var root = document.getElementById("root");
var style = document.getElementById("style");
var pfpbox = document.getElementById("pfpbox");
var pfp = document.getElementById("pfp");
var squares = document.getElementById("squares");

var delayInMilliseconds = 3000;

function empty() {
    root.innerHTML = `
        <article>MOD DATABASE ver. 1.05</article>
    `;
}

function login() {
    root.innerHTML = `
        <div class="login">
        <form>
            <input type="text" placeholder="LOGIN" required class="login1"><br>
            <input type="password" placeholder="PASSWORD" required class="password1"><br>
            <button class="submit" onclick="submit1()">SUBMIT</button>
        </form>
    </div>
    `;

    style.innerHTML += `
    .login {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 10px;
        height: 500px;
        width: 400px;
        justify-content: center;
        align-items: center;
        background-color: rgba(255, 255, 255, 0.11);
        border-radius: 10px;
    }
    
    form {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 10px;
    }
    
    input {
        background-color: rgb(20, 13, 13);
        border: none;
        font-size: 30px;
        font-style: italic;
        color: #ffffff;
        height: 50px;
        width: 242px;
        border-radius: 3px;
        margin-top: 15px;
        margin-bottom: 15px;
    }
    
    .submit {
        background-color: rgb(20, 13, 13);
        border: none;
        border-radius: 3px;
        margin-top: 15px;
        font-size: 30px;
        font-style: italic;
        color: #ffffff;
        height: 50px;
        width: 246px;
    }
    
    .submit:hover {
        animation-name: animloga;
        animation-delay: 0.1s;
        animation-duration: 0.1s;
        animation-fill-mode: forwards;
    }
    
    .submit {
        animation-name: animlogb;
        animation-duration: 0.2s;
        animation-fill-mode: forwards;
    }
    
    @keyframes animloga {
        0%{color: #ffffff;}
        100%{color: aqua;
        text-shadow: 0 0 30px rgba(27, 255, 255, 0.822);
        }
    }
    
    @keyframes animlogb {
        0%{color: aqua;
        text-shadow: 0 0 30px rgba(27, 255, 255, 0.822);
        }
        100%{color: #ffffff;}
    }
    `;

}

function logout() {

    root.innerHTML = `
    
    `;

    squares.innerHTML = `
    <div class="sqr1">
        <p class="paragraf">MODS</p>
    </div>
    <div class="sqr2">
        <p class="paragraf">ARCANES</p>
    </div>
    <div class="sqr3">
        <p class="paragraf">ADD</p>
    </div>
    <div class="sqr4">
        <p class="paragraf">BUILD</p>
    </div>
    <div class="sqr5" onclick="login()">
        <p class="paragraf">LOGIN</p>
    </div>
    `;

    pfpbox.innerHTML = `
        <p class="accPfp" id="pfp">?</p>
    `;

}

function submit1() {

    root.innerHTML = `
    <h2>LOGGING IN</h2>
    <div class="circle">
    </div>
    `;

    pfpbox.innerHTML = `
        <img src="pfp.png" class="pfp">
    `;

    squares.innerHTML = `
    <div class="sqr1">
        <p class="paragraf">MODS</p>
    </div>
    <div class="sqr2">
        <p class="paragraf">ARCANES</p>
    </div>
    <div class="sqr3">
        <p class="paragraf">ADD</p>
    </div>
    <div class="sqr4">
        <p class="paragraf">BUILD</p>
    </div>
    <div class="sqr5" onclick="logout()">
        <p class="paragraf">LOGOUT</p>
    </div>
    `;

    style.innerHTML += `
    h2 {
        position: absolute;
        top: 30%;
        left:47%;
        color: #ffffff;
        font-size: 30px;
    }
    
    .circle {
        position: absolute;
        top: 40%;
        left: 45%;
        width: 150px;
        height: 150px;
        border: 16px solid #00fff285;
        border-top-color: #00000000;
        border-bottom-color: #00000000;
        border-radius: 50%;
        animation: circleanim 2s linear infinite;
    }
    
    @keyframes circleanim {
        0%{transform: rotate(0deg);}
        100%{transform: rotate(360deg);}
    }

    .pfp {
        width: 83px;
        height: 83px;
    } 
    `;

    setTimeout(function(){
        empty();
    }, 3000);
}