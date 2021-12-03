<div class="snow"></div>
<style>
    .editor-stage .snow {
        height: 50px;
        background: #fff;
    }

    .snow {
        position: fixed;
        pointer-events: none;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        height: 100vh;
        background: none;
        background-image: url('https://s3-eu-west-1.amazonaws.com/static-ressources/s1.png'), url('https://s3-eu-west-1.amazonaws.com/static-ressources/s2.png'), url('https://s3-eu-west-1.amazonaws.com/static-ressources/s3.png');
        z-index: 100;
        -webkit-animation: snow 10s linear infinite;
        -moz-animation: snow 10s linear infinite;
        -ms-animation: snow 10s linear infinite;
        animation: snow 10s linear infinite;
    }

    @keyframes snow {
        0% {
            background-position: 0px 0px, 0px 0px, 0px 0px;
        }

        50% {
            background-position: 500px 500px, 100px 200px, -100px 150px;
        }

        100% {
            background-position: 500px 1000px, 200px 400px, -100px 300px;
        }
    }

    @-moz-keyframes snow {
        0% {
            background-position: 0px 0px, 0px 0px, 0px 0px;
        }

        50% {
            background-position: 500px 500px, 100px 200px, -100px 150px;
        }

        100% {
            background-position: 400px 1000px, 200px 400px, 100px 300px;
        }
    }

    @-webkit-keyframes snow {
        0% {
            background-position: 0px 0px, 0px 0px, 0px 0px;
        }

        50% {
            background-position: 500px 500px, 100px 200px, -100px 150px;
        }

        100% {
            background-position: 500px 1000px, 200px 400px, -100px 300px;
        }
    }

    @-ms-keyframes snow {
        0% {
            background-position: 0px 0px, 0px 0px, 0px 0px;
        }

        50% {
            background-position: 500px 500px, 100px 200px, -100px 150px;
        }

        100% {
            background-position: 500px 1000px, 200px 400px, -100px 300px;
        }
    }
</style>