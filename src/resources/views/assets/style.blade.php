<style type="text/css">
  .page-loader {
    display: none;
  }
  body, html { overflow-x:hidden; }
  body {
    background-image: linear-gradient(to top, #e6e9f0 0%, #eef1f5 100%);
  }
  .onex-container {
    padding: 15px;
    margin: 15px;
    width: 90%;
    height: auto;
    margin: 0 auto;
  }
  .page-heading {
    text-align:center;
  }
  .page-heading h1 {
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 600;
  }
  .search-txt {
    padding: 12px;
    width: 30%;
    border: 1px solid #ddd;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    font-size: 16px;
  }
  .table {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  .table td, .table th {
    border: 1px solid #ddd;
    padding: 8px;
  }

  .table tr:nth-child(even){background-color: #f2f2f2;}

  .table tr:hover {background-color: #ddd;}

  .table th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #047ec5;
    color: white;
  }
  .table td {
    color: #7a7a7a;
    font-weight: 500;
    word-break:break-all; 
    word-wrap:break-word;
    padding-top: 15px;
    padding-bottom: 15px;
  }
  
  .btn, .btn:link, .btn:active, .btn:visited, .btn:hover {
    text-decoration: none;
    font-size: 16px;
    margin-left: 10px;
    padding: 6px;
    color: #fff;
    border-radius: 4px;
    font-family: Verdana, sans-serif;
  }
  .btn-download {
    background-color: #ffbc00;
    border: 1px solid #b9a200;
  }
  .btn-delete {
    background-color: #f53104;
    border: 1px solid #c50000;
  }
  .btn-danger {
    background-color: #c93002;
    border: 1px solid #a92700;
  }
  .btn-clear {
    background-color: #047bf5;
    border: 1px solid #004fc5;
  }
  .btn-view {
    background-color: #5cb100;
    border: 1px solid #3d8d01
  }
  .done-again {
    background-color: #6fd500;
    border: 1px solid #55c700;
  }
  .btn-running {
    background-color: #89b757;
    border: 1px solid #3d8d01
  }
  .btn:hover {
    cursor: pointer;
  }
  .mt-1 {
    margin-top:5px;
  }
  .mt-10 {
    margin-top:50px;
  }
  .mt-ten {
    margin-top:10px;
  }
  .alert.alert-danger {
    margin-top: 60px;
  }
  .alert.alert-danger p {
    font-size: 24px;
    word-spacing: 5px;
    font-family: Arial, Helvetica, sans-serif;
    color: #ff5050;
    text-align: center;
  }
  .alert.alert-danger p span {
    color: #000;
  }
  .onexsysinfo-login {
    width: 300px;
    height: auto;
    margin: 25px auto;
    padding: 15px;
    text-align: center;
  }
  .onexsysinfo-login h3 {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 20px;
    color: #7c7979;
    font-weight: 500;
  }
  .onexsysinfo-login .field-box {
    padding: 10px;
  }
  .field-box label {
    color: #7c7979;
    font-weight: 600;
  }
  .field-box .onex-field {
    margin-top: 6px;
    width: 100%;
    padding: 10px;
    border: 1px solid #000;
    border-radius: 5px;
    font-size: 16px;
    font-weight: 500;
  }
  .onexsubbtn {
    padding: 12px;
    background: #eb4432;
    color: #fff;
    font-size: 16px;
    border: 1px solid #ddd;
    border-radius: 5px;
    width: 100%;
    font-weight: 600;
  }
  .onexsubbtn:hover {
    cursor: pointer;
  }
  .text-right {
    text-align: right;
  }
  .text-center {
    text-align: center;
  }
  .text-left {
    text-align: left;
  }
  .onexlogout:link, .onexlogout:active, .onexlogout:visited, .onexlogout:hover {
    text-decoration: none;
    background:#FF4000;
    color: #fff;
    padding: 6px;
    border-radius: 4px;
    font-family: Arial, Helvetica, sans-serif;
  }
  .onexlogout:hover {
    cursor: pointer;
  }
  .error-box {
    color: red;
    font-size: 16px;
  }
  span.highlight {
    color: #efff00;
    font-family: Verdana, sans-serif;
  }
  .name {
    font-size: 18px;
    font-weight: 600;
    word-spacing: 4px;
  }
  span.command {
    background: #047ec5;
    color: #fff;
    padding: 4px;
    border-radius: 5px;
    border: 1px solid #004bbb;
  }
  .php-artisan {
    font-family: Verdana, sans-serif;
    margin-left: 10px;
    word-spacing: 2px;
    color: #ef3700;
    font-size: 18px;
  }
  .logout-box {
    text-align: right;
    padding-bottom: 7px;
  }
  .td-head {
    /*background-image: radial-gradient( circle 993px at 0.5% 50.5%,  rgba(137,171,245,0.37) 0%, rgba(245,247,252,1) 100.2% );*/
    background-image: linear-gradient( 89.9deg,  rgba(208,246,255,1) 0.1%, rgba(255,237,237,1) 47.9%, rgba(255,255,231,1) 100.2% );
    font-weight: 600 !important;
    color: #000 !important;
  }
  #responseText {
    color: #2d9b00;
    font-size: 14px;
    word-spacing: 0px;
    margin-left: 15px;
    font-family: Verdana, sans-serif;
  }
  .user-input {
    padding: 6px;
    border: 1px solid #ddd;
    border-radius: 4px;
  }
  .w-sm {
    width: 40px;
  }
  .w-md {
    width: 220px;
  }
</style>