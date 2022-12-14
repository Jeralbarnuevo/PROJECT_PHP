
<style>
    *{
        box-sizing: border-box;
        padding:0;
        margin:0;
    }
    .rotate{
        height: 100vh;
        width: 100%;
        display:flex;
        flex-direction: column;
        gap:2rem;  
        color:white; 
        align-items: center;
        justify-content: center;
        background-color:#319052;
        position:absolute;
        top:0;
        left:0;
        z-index: 9999;
        animation: load-effects 3s;
        animation-fill-mode: forwards;

    }
    .rotate>img{
        max-width: 350px;
        border-radius: 100%;
        animation: rotate 2s infinite;
        box-shadow: 3px 5px 13px 5px black;
    }
    @keyframes rotate {
        100% {
            transform:rotateY(360deg);
        }
        
    }
    .rotate.hide{
        animation: load-effects 1s;
        animation-fill-mode: forwards;
    }
    @keyframes load-effects{
        100%{
            opacity:0;
            visibility: hidden;
        }
    }
</style>
<body>
    <div class="rotate hide">
        <img src="../Assets/logo.jpg" alt="">
        <h3>Loading...</h3>
    </div>
