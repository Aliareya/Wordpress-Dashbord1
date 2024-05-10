<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
   <style>
      *{
         padding: 0;
         margin: 0;
         box-sizing: border-box;
      }
      .tyl-navbar{
          width: 15%;
          height: 95vh;
          background-color: #cbcbcb;
          border-right: 2px solid black;
          padding-left: 10px;
      }
      .tyl_li_list_setting{
         padding-top:10px ;
      }
      .tyl_li_list_setting li{
         display: flex;
         gap: 10px;
         align-items: center;
         border-bottom: 1px solid gray;
         padding-top:20px ;
         padding-bottom:20px ;
      }
   </style>
</head>
<body>
   <div class="tyl-navbar">
     <ul class="tyl_li_list_setting">
      <li><i class="fa fa-tachometer"></i><span>Dashboard</span></li>
      <li><i class="fa fa-home"></i><span>Home</span></li>
      <li><i class="fa fa-file"></i><span>Pages</span></li>
      <li><i class="fa fa-archive"></i><span>Product</span></li>
      <li><i class="fa fa-user-circle"></i><span>Users</span></li>
      <li><i class="fa fa-comments"></i><span>Comments</span></li>
      <li><i class="fa fa-bar-chart"></i><span>Performance</span></li>
      <li><i class="fa fa-bars"></i><span>Menus</span></li>
      <li><i class="fa fa-cog"></i><span>Settings</span></li>
     </ul>
   </div>
</body>
</html>