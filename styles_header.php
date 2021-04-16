<?php 
    echo ('<style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }
    
        body {
            margin: 0;
            font-family: \'Poppins\', sans-serif;
        } 

        header {
            height: 80px;
            width: 100vw;
            border-bottom: 1px solid #848C96;
            position: fixed;
            top: 0;
            background-color: #FFF;
            z-index: 1;
        }
        
        .logo {
            margin-top: 0;
            width: 68px;
            position: absolute;
            top: 20px;
            left: 40px;
        }
        
        header div {
            position: absolute;
        }
        
        .bag {
            top: 26px;
            right: 40px;
        }
        
        .bag svg{
            width: 36px;
            height: 36px;
            color: #09192C;
        }
        
        .search {
            top: 25px;
            right: 155px;
        }
        
        .search input {
            width: 160px;
            height: 40px;
            margin: auto;
            border: solid 2px #000;
            border-radius: 40px;
            padding-left: 35px;
            font-size: 0.875rem;
        }
        
        .search input:focus {
            outline: none;
            box-shadow: #848C96 2px 2px 2px;
        }
        
        .search svg{
            width: 20px;
            height: 20px;
            color: #848C96;
            position: absolute;
            top: 10px;
            left: 7px;
        }
        
        .exit {
            position: fixed;
            top: 120px;
            left: 20px;
        }
        
        .exit svg {
            width: 70px;
            height: 70px;
            color: #09192C;
        }
    </style>')
?>