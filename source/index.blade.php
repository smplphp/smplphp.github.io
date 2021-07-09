<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SMPL - Simple, modern PHP libraries</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        html {
            height     : 100vh;
            width      : 100vw;
            max-height : 100vh;
            max-width  : 100vw;
            overflow   : hidden;
        }

        body {
            background-color : black;
            font-family      : 'Inter', sans-serif;
            color            : white;
            width            : 100%;
            height           : 100%;
            position         : relative;
        }

        #content {
            margin        : 0;
            position      : absolute;
            top           : 50%;
            left          : 50%;
            -ms-transform : translate(-50%, -50%);
            transform     : translate(-50%, -50%);
            display       : flex;
            flex-wrap     : nowrap;
        }

        h1 {
            margin-top : 0;
        }

        p {
            font-size   : 14px;
            font-weight : normal;
        }

        a {
            color : white;
        }

        svg {
            margin-right : 2rem;
        }
    </style>
</head>
<body>
<div id="content">
    <svg width="125" height="125" viewBox="0 0 125 125" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd"
              d="M0 0H125V125H0V0ZM52.7151 34.2301C52.0738 29.1447 48.2261 26 41.6782 26C35.0459 26 30.675 29.2705 30.6919 34.5895C30.675 38.7226 33.1221 41.4001 38.1849 42.4783L42.6739 43.4306C44.9353 43.9158 45.9647 44.7963 45.9985 46.18C45.9647 47.8153 44.294 48.9833 41.7795 48.9833C39.2143 48.9833 37.5098 47.8153 37.071 45.569L30 45.9644C30.675 51.2475 34.894 54.5 41.7626 54.5C48.4792 54.5 53.2889 50.8521 53.3058 45.4073C53.2889 41.418 50.8419 39.0281 45.8128 37.9319L41.1213 36.9256C38.708 36.3685 37.8136 35.488 37.8305 34.1583C37.8136 32.5051 39.5687 31.4269 41.7963 31.4269C44.294 31.4269 45.7791 32.8824 46.1335 34.6614L52.7151 34.2301ZM57.8328 53.9609H65.0219V37.3928C65.0219 34.338 66.8445 32.3074 69.2409 32.3074C71.6036 32.3074 73.1899 34.0325 73.1899 36.7459V53.9609H80.1597V37.1053C80.1597 34.2481 81.6954 32.3074 84.3112 32.3074C86.6063 32.3074 88.3277 33.8348 88.3277 36.9076V53.9609H95.5V35.3982C95.5 29.4143 92.1586 26 87.332 26C83.5349 26 80.5816 28.0665 79.5184 31.2292H79.2484C78.4215 28.0306 75.7719 26 72.2111 26C68.7178 26 66.0682 27.9767 64.9882 31.2292H64.6844V26.3594H57.8328V53.9609ZM65.61 57.5H58.7396V90.2805H65.61V57.5ZM30 99.5H36.8704V86.343H37.0801C38.0316 88.3918 40.1121 90.6806 44.1117 90.6806C49.7564 90.6806 54.1593 86.2469 54.1593 78.0198C54.1593 69.5686 49.5629 65.375 44.1279 65.375C39.983 65.375 37.9993 67.8239 37.0801 69.8247H36.7736V65.6951H30V99.5ZM36.7253 77.9878C36.7253 73.6021 38.5961 70.8011 41.9345 70.8011C45.3374 70.8011 47.1437 73.7302 47.1437 77.9878C47.1437 82.2774 45.3052 85.2546 41.9345 85.2546C38.6283 85.2546 36.7253 82.3735 36.7253 77.9878ZM79 86.8552C78.9839 88.984 77.1937 90.6966 75.1293 90.6966C73.0005 90.6966 71.2426 88.984 71.2587 86.8552C71.2426 84.7584 73.0005 83.0457 75.1293 83.0457C77.1937 83.0457 78.9839 84.7584 79 86.8552Z"
              fill="#00A37C"/>
    </svg>

    <div>
        <h1>
            Simple, modern PHP <br>
            framework and libraries
        </h1>
        <p>
            <strong>Follow</strong>
            on <a href="http://twitter.com/smplphp" target="_blank">twitter</a>
            for updates.{{--, or <strong>read the</strong>
            <a href="/docs/current/getting-started">docs</a>--}}
        </p>
    </div>
</div>
</body>
</html>