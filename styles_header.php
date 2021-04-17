<?php
echo ('<style>
            
    header {
        top: 0;
        height: 80px;
        width: 94vw;
        position: fixed;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #ffffff;
        z-index: 1;
    }

    .logo {
        width: 68px;
        height: 40px;
    }

    .right {
        width: 300px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        
    }

    .bag { 
        width: 36px;
        height: 36px;
        color: #09192C;
    }

    .searchbar{
        display: flex;
        justify-content: space-around;
        align-items: center;
        cursor: text;
        margin: 0 auto;
        padding: 6px 10px;
        border-radius: 24px;
        border: solid 2px #09192C;
    }

    .searchbar input {
        box-sizing: border-box;
        margin-left: 10px;
        width: 120px;
        border-color: transparent;
        background-color: transparent;
        color:  #848C96;
        font-size: 0.875rem;
        user-select: none;
        font-family: "Poppins";
    }
            
    .searchbar input:focus {
        outline: none;
        color:  #09192C;
    }

    .icon{
        margin: auto;
        width: 24px;
        color: #848C96;
    }

    .icon svg{
        vertical-align: middle;
    }
    </style>');