<x-guest-layout>
  
        <!DOCTYPE html>
        <html lang="en" dir="ltr">
          <head>
            <meta charset="UTF-8">
            <!-- Boxicons CDN Link -->
            <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
             <meta name="viewport" content="width=device-width, initial-scale=1.0">
             <style>
             /* Googlefont Poppins CDN Link */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }
    .sidebar{
      position: fixed;
      height: 100%;
      width: 240px;
      background: #0A2558;
      transition: all 0.5s ease;
    }
    .sidebar.active{
      width: 60px;
    }
    .sidebar .logo-details{
      height: 80px;
      display: flex;
      align-items: center;
    }
    .sidebar .logo-details i{
      font-size: 28px;
      font-weight: 500;
      color: #fff;
      min-width: 60px;
      text-align: center
    }
    .sidebar .logo-details .logo_name{
      color: #fff;
      font-size: 24px;
      font-weight: 500;
    }
    .sidebar .nav-links{
      margin-top: 10px;
    }
    .sidebar .nav-links li{
      position: relative;
      list-style: none;
      height: 50px;
    }
    .sidebar .nav-links li a{
      height: 100%;
      width: 100%;
      display: flex;
      align-items: center;
      text-decoration: none;
      transition: all 0.4s ease;
    }
    .sidebar .nav-links li a.active{
      background: #081D45;
    }
    .sidebar .nav-links li a:hover{
      background: #081D45;
    }
    .sidebar .nav-links li i{
      min-width: 60px;
      text-align: center;
      font-size: 18px;
      color: #fff;
    }
    .sidebar .nav-links li a .links_name{
      color: #fff;
      font-size: 15px;
      font-weight: 400;
      white-space: nowrap;
    }
    .sidebar .nav-links .log_out{
      position: absolute;
      bottom: 0;
      width: 100%;
    }
    .home-section{
      position: relative;
      background: #f5f5f5;
      min-height: 100vh;
      width: calc(100% - 240px);
      left: 240px;
      transition: all 0.5s ease;
    }
    .sidebar.active ~ .home-section{
      width: calc(100% - 60px);
      left: 60px;
    }
    .home-section nav{
      display: flex;
      justify-content: space-between;
      height: 80px;
      background: #fff;
      display: flex;
      align-items: center;
      position: fixed;
      width: calc(100% - 240px);
      left: 240px;
      z-index: 100;
      padding: 0 20px;
      box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
      transition: all 0.5s ease;
    }
    .sidebar.active ~ .home-section nav{
      left: 60px;
      width: calc(100% - 60px);
    }
    .home-section nav .sidebar-button{
      display: flex;
      align-items: center;
      font-size: 24px;
      font-weight: 500;
    }
    nav .sidebar-button i{
      font-size: 35px;
      margin-right: 10px;
    }
    .home-section nav .search-box{
      position: relative;
      height: 50px;
      max-width: 550px;
      width: 100%;
      margin: 0 20px;
    }
    nav .search-box input{
      height: 100%;
      width: 100%;
      outline: none;
      background: #F5F6FA;
      border: 2px solid #EFEEF1;
      border-radius: 6px;
      font-size: 18px;
      padding: 0 15px;
    }
    nav .search-box .bx-search{
      position: absolute;
      height: 40px;
      width: 40px;
      background: #2697FF;
      right: 5px;
      top: 50%;
      transform: translateY(-50%);
      border-radius: 4px;
      line-height: 40px;
      text-align: center;
      color: #fff;
      font-size: 22px;
      transition: all 0.4 ease;
    }
    .home-section nav .profile-details{
      display: flex;
      align-items: center;
      background: #F5F6FA;
      border: 2px solid #EFEEF1;
      border-radius: 6px;
      height: 50px;
      min-width: 190px;
      padding: 0 15px 0 2px;
    }
    nav .profile-details img{
      height: 40px;
      width: 40px;
      border-radius: 6px;
      object-fit: cover;
    }
    nav .profile-details .admin_name{
      font-size: 15px;
      font-weight: 500;
      color: #333;
      margin: 0 10px;
      white-space: nowrap;
    }
    nav .profile-details i{
      font-size: 25px;
      color: #333;
    }
    .home-section .home-content{
      position: relative;
      padding-top: 104px;
    }
    .home-content .overview-boxes{
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      padding: 0 20px;
      margin-bottom: 26px;
    }
    .overview-boxes .box{
      display: flex;
      align-items: center;
      justify-content: center;
      width: calc(100% / 4 - 15px);
      background: #fff;
      padding: 15px 14px;
      border-radius: 12px;
      box-shadow: 0 5px 10px rgba(0,0,0,0.1);
    }
    .overview-boxes .box-topic{
      font-size: 20px;
      font-weight: 500;
    }
    .home-content .box .number{
      display: inline-block;
      font-size: 35px;
      margin-top: -6px;
      font-weight: 500;
    }
    .home-content .box .indicator{
      display: flex;
      align-items: center;
    }
    .home-content .box .indicator i{
      height: 20px;
      width: 20px;
      background: #8FDACB;
      line-height: 20px;
      text-align: center;
      border-radius: 50%;
      color: #fff;
      font-size: 20px;
      margin-right: 5px;
    }
    .box .indicator i.down{
      background: #e87d88;
    }
    .home-content .box .indicator .text{
      font-size: 12px;
    }
    .home-content .box .cart{
      display: inline-block;
      font-size: 32px;
      height: 50px;
      width: 50px;
      background: #cce5ff;
      line-height: 50px;
      text-align: center;
      color: #66b0ff;
      border-radius: 12px;
      margin: -15px 0 0 6px;
    }
    .home-content .box .cart.two{
       color: #2BD47D;
       background: #C0F2D8;
     }
    .home-content .box .cart.three{
       color: #ffc233;
       background: #ffe8b3;
     }
    .home-content .box .cart.four{
       color: #e05260;
       background: #f7d4d7;
     }
    .home-content .total-order{
      font-size: 20px;
      font-weight: 500;
    }
    .home-content .sales-boxes{
      display: flex;
      justify-content: space-between;
      /* padding: 0 20px; */
    }
    
    /* left box */
    .home-content .sales-boxes .recent-sales{
      width: 65%;
      background: #fff;
      padding: 20px 30px;
      margin: 0 20px;
      border-radius: 12px;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }
    .home-content .sales-boxes .sales-details{
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .sales-boxes .box .title{
      font-size: 24px;
      font-weight: 500;
      /* margin-bottom: 10px; */
    }
    .sales-boxes .sales-details li.topic{
      font-size: 20px;
      font-weight: 500;
    }
    .sales-boxes .sales-details li{
      list-style: none;
      margin: 8px 0;
    }
    .sales-boxes .sales-details li a{
      font-size: 18px;
      color: #333;
      font-size: 400;
      text-decoration: none;
    }
    .sales-boxes .box .button{
      width: 100%;
      display: flex;
      justify-content: flex-end;
    }
    .sales-boxes .box .button a{
      color: #fff;
      background: #0A2558;
      padding: 4px 12px;
      font-size: 15px;
      font-weight: 400;
      border-radius: 4px;
      text-decoration: none;
      transition: all 0.3s ease;
    }
    .sales-boxes .box .button a:hover{
      background:  #0d3073;
    }
    
    /* Right box */
    .home-content .sales-boxes .top-sales{
      width: 35%;
      background: #fff;
      padding: 20px 30px;
      margin: 0 20px 0 0;
      border-radius: 12px;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }
    .sales-boxes .top-sales li{
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin: 10px 0;
    }
    .sales-boxes .top-sales li a img{
      height: 40px;
      width: 40px;
      object-fit: cover;
      border-radius: 12px;
      margin-right: 10px;
      background: #333;
    }
    .sales-boxes .top-sales li a{
      display: flex;
      align-items: center;
      text-decoration: none;
    }
    .sales-boxes .top-sales li .product,
    .price{
      font-size: 17px;
      font-weight: 400;
      color: #333;
    }
    /* Responsive Media Query */
    @media (max-width: 1240px) {
      .sidebar{
        width: 60px;
      }
      .sidebar.active{
        width: 220px;
      }
      .home-section{
        width: calc(100% - 60px);
        left: 60px;
      }
      .sidebar.active ~ .home-section{
        /* width: calc(100% - 220px); */
        overflow: hidden;
        left: 220px;
      }
      .home-section nav{
        width: calc(100% - 60px);
        left: 60px;
      }
      .sidebar.active ~ .home-section nav{
        width: calc(100% - 220px);
        left: 220px;
      }
    }
    @media (max-width: 1150px) {
      .home-content .sales-boxes{
        flex-direction: column;
      }
      .home-content .sales-boxes .box{
        width: 100%;
        overflow-x: scroll;
        margin-bottom: 30px;
      }
      .home-content .sales-boxes .top-sales{
        margin: 0;
      }
    }
    @media (max-width: 1000px) {
      .overview-boxes .box{
        width: calc(100% / 2 - 15px);
        margin-bottom: 15px;
      }
    }
    @media (max-width: 700px) {
      nav .sidebar-button ,
      nav .profile-details,
      nav .profile-details i{
        display: none;
      }
      @media (max-width: 700px) {
        nav .admin_name {
          display: block;
        }
      }
      .home-section nav .profile-details{
        height: 50px;
        min-width: 40px;
      }
      .home-content .sales-boxes .sales-details{
        width: 560px;
      }
    }
    @media (max-width: 550px) {
      .overview-boxes .box{
        width: 100%;
        margin-bottom: 15px;
      }
      .sidebar.active ~ .home-section nav .profile-details{
        display: none;
      }
    }
    
             </style>    
           </head>
        <body>
          <div class="sidebar">
            <div class="logo-details">
              <i class='bx bxl-c-plus-plus'></i>
              {{-- <span class="logo_name">CodingLab</span> --}}
            </div>
            <h3 class="text-white"> School Admin Dashboard</h3>
              <ul class="nav-links">
       {{-- <li>
                  <a href="#" class="active">
                    <i class='bx bx-grid-alt' ></i>
                    <span class="links_name" title="Dashboard"></span>
                  </a>
                </li> --}}
                 {{--<li>
                  <a href="#">
                    <i class='bx bx-box' ></i>
                    <span class="links_name">Product</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class='bx bx-list-ul' ></i>
                    <span class="links_name">Order list</span>
                  </a>
                </li> --}}
             
      
                <li>
                <a href=" {{ url('activate') }}">
                  <i class='bx bx-user' ></i>
                  <span class="links_name">Create Accounts</span>
                </a>
              </li>
    
              <li>
              <a href=" {{ url('noactivate') }}">
                <i class='bx bx-pie-chart-alt-2' ></i>
                <span class="links_name">Start Tour</span>
              </a>
            </li> 

             <li>
                  <a href="#">
                    <i class='bx bx-coin-stack' ></i>
                    <span class="links_name" title="Stock">See All Events</span>
                  </a>
            </li> 

             <li>
                  <a href="#">
                    <i class='bx bx-book-alt' ></i>
                    <span class="links_name" title="total order">See All Results</span>
                  </a>
            </li> 

            <li>
                <a href=" {{ url('analytic_page') }}">
                  <i class='bx bx-pie-chart-alt-2' ></i>
                  <span class="links_name">See Achievements</span>
                </a>
              </li>

              <li>
                <a href="#">
                  <i class='bx bx-box' ></i>
                  <span class="links_name">Payment</span>
                </a>
              </li>

           {{--  <li>
                  <a href="#">
                    <i class='bx bx-user' ></i>
                    <span class="links_name" title="Team"></span>
                  </a>
            </li>


            <li>
                  <a href="#">
                    <i class='bx bx-message' ></i>
                    <span class="links_name" title="Messages"></span>
                  </a> 
                </li>
                 <li>
                  <a href="#">
                    <i class='bx bx-heart' ></i>
                    <span class="links_name">Favrorites</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url ('admin_settings') }}">
                    <i class='bx bx-cog' ></i>
                    <span class="links_name" title="Settings"></span>
                  </a>
                </li> --}}
                 <li class="log_out">
                  <a href="#">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name"></span>
                  </a>
                </li> 
              </ul>
          </div>
    
    
          {{-- other section --}}
          <section class="home-section">
            <nav>
              <form action="{{ url('admin_dashboard') }}" method="">
              <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">
                    <img 
                    src="data:image/png;base64,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" 
                    alt="m" 
                    width="30" 
                    height="30"/></span>
                     <i>
                        {{-- <img 
                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAABdFBMVEX///8AAAD//v////15QRx8WT78//95RSP//v7///v29vZsMwDZz8X//P/g1Mr///n76t13RST67eL759f///dxNwr15Nf96tv6//z57OPUvKn/8OF7QyMAIJL6//sAHZcAGJewl4br4NcAMJhsibbGurGup6FEQT5ybmuknpl8Syfx8fEAO5gANpYAO5cAKJhRdLDv+P3H0uIANZ03X6kAJpCWb1NiJwCSjIeAfHhOTUw0MjCrpJ7KwLYqKirdxbUaGRh6dXFeV1ImJSRqZWLX5e68zOSmt87OysYAP5SWrs6Np9FphrlJa68lU6BXfbRnhbAzXa4eTaiJpcV8lbllhMDe7fJ6l8o8YrDK1e4AGqTD3eWesMa3xNJ9nLyfwdeok4uPeG6EYlF/Tze1pZGpiXJbGgCdbE2lfWJtKAB0Sy/x8tvJqJBlOBeFaVX63dkjGhLLr5dVd7cANqiIqMAwXZojUZafrdUAC6MZSI8NS4hNbaCCnT+KAAAUIElEQVR4nO1di1/a2LbezabbxBLCI0AihdAoKB0Rg1pBpfgKKD5LEae1j7nTOrfTmc45dc60Z+7883etBK0P6GmrbJ3zyzd1lCxg82Xt9dw7gRAPHjx48ODBgwcPHjx48ODBgwcPHjx48ODBgwcPHjx48ODBgwcPHjxcLQRBIIxpTMA/4CGVKGMyPhJESuGYRPFvCpAUAL6GigBJIkQUhc7bUPedCLyX80PptTE6C+QhyjKQ0bSUhCzwwwsaIIWAIwwfaBKACvB85w/WgZaC5+GZkFJwOAWPJFGQZTwdN4chaAbZoKIIsCWgs69+Fyrh/0QByalI8xveo18QcYoqkvM306y2bRdrL+uNjVZrZHPvaGt6ent7fX18PO9gGJHPj0+sr69vb3+Y3prc2RzZ399oNOrPi7ZtWThDO3wF8fpI0c7PMSy7WG+0No+mt8cLScMw0ggjWRieGm8+2gYakzs7m7uAERe7u5s7O5NbW4+azfGpYXwJPB3+Gcnhie3pyc3HjdpB27o4JhdIYEaCSlIp9BesXay3JpsFh1Ahvz19tNd63KjXigd227I09qVvylzN1xuP9/cmp5tTSNlITn0/8vi5bYHLAf+kpRRBUHhoVRJEFdwFsZ40RqbzcNYLE1sjrfpzOOfASELeIpxuel7NnwVFqwMP7L6AWTAnah9bk9v5ZPppobnzuGapkgyOl4vvgWFUdvB4GqZWfmvvWc12JhN1vD5CQa+pgDulJ5/4S4DPRm8FL2ZUAb4qvhbnyP7kOqj0UeuAqRLT+kXrFCQqkudPjWarbjOCGpMUVdIYBgAJP5/oMP3i+dkBhg0BIij+k0U4NRLQVRXUq0pZu/Ziu2DUFVFQ+kHpHCjMwWLyJdqGxJiI8RzihUzdcA3cGMP4jo/Zl/OE8yZAysAYdWIl/MgQYQm8kcxQp4S8TNc0Kkh9ZHYMcDTETtYkrp5cEmktXSSKIPzn514aIpiMbdQpV4YUGR5AkOTBEKam1E5/5BeeEEwk9bRNRcbFl0JIsNIbnBkKpJFuc2KIyRRL7pMUl7GOh9TIRvo7TNp5jZgcITwi0wkESlppiyfDYWDIbTAA+O+Wgb+5DTq+Q1I8nSkwHCkQnjpsbnG2Q4lM5vE3txGnm5QrQzif329zHXBygrMOKdme5jkg2cxz9jSUrE9yHI+QkWFGuTIkZH2X43iEtGYs6WsLpEtBYRCgeGKDM0NBsgotjuMR8nHG5pqXCtSa2eA5IKkDQ76exp5pcByPkFqyyFeHkp2s8xyQ1IwiXztUikaN43iEFI3nlK+n4c+wzpchrRlPOI5HiJ1+Rr6d4debsEDqRvGbx/sWtI0GudjYY0zE5TNREgV6omJKO4ywjUo0p18oyK5IGhwcVBRXLMDrKLyFJHVpQlJgaPeHSg9YhcddGDpdamdhkBDJrGR/+J8fXwF+/PHwdcWEp2uaJOB6KIjD/teHD96GonfuRENvfzy8VzFVieCaaPeZIZGG0e4zp7Owfm91YYglKrBTY0OHt2d/mvW9+t83h4eHbx68uvvzTz9F3wyZoCMN5IF7P87+PHsndPuBK7/9Fp5958E9v06QfZe1AIk8LlgXx+sfqDa124UhLmfrmcO3s7OhN79WY0FdD8fjwfgvv/wSqf765v7s7O3XpmreC83OvgV5JAJCB/EIyuHwu98yYYl0acVKpPX7IA9mx6Da+E6Xw4IU+O3dz7Ov7lV1XTcjkZiLf/wjFoMD4cCvD2Z/8oGyfg0kwuFg7BQiJsirv96evfPuN796caaKZHOcrw5Jc7JLR4Hps77Qm2pQx88c18PhsImA3+EY0tWDkfe330fiYZTH8LAOYh0RR57BYPXQF5o1u9ni0TrXWoaQ6a4VdyDqi1aDZjiWCPoXyssPb7mYXy4v+PVEXDdjwR/isbAeSegon+/IH86BPJiI6aZevXM36r/4xpQc8W1iEDK53S0eIsOhSDiQm8MPPrpaLuVyuVJ5ddR5WKoEY5F7kUjQX3IOzJ+Vz+X84UgPhgxPKd+dCztNoUtL2GGoLyObTABnYRgdCf4OZErIWgeGYVDtXEd+LEY50BwNV++E7nRl+GiL694MSvcmWJd+aeDOQHQoPJaNJeJB9CUBv7/i9wfAwHQdXGamHAaGejkTTKCfdeSAgIlPjidi2VVgONCNIWHNI667ayjdH7a6DOgwjMCH1/3Z8tytEyzOlbP+cAIcCzA0gVsQ5YufnjC6lPWjw4n1ZDixx3n/EATgLhHfZWhmlhy7WiplM4iF0pLDdnXBRIZ6ILvqsiotOE/I5tyzMZYxI9VoV4YSG97nbIcNw+6ypO7OUnCR5WxAd4N53AnrCd3MlOddO9TBeZYzpn5a7MgXby32mqUpK/m4/6TOoJG0e+kwCD4xAZ86bPoz2exCNpvxm+hTEonAQhAYBhcCII6HT8kD4UQCXuAvBXswpPwZ1me6FTPuLMVAni2P3jqNUVerGC1i4SBM1ItyOA097RDbNJztsHujxmEY95cwlM+Vc6AcgL+ScQ1tsVxBhvpa+WFHXgE/Ck/ILDjy+dJaLx1KxWSd80a+olHrNUsTi7eWF2DexeOYW7sIhkFtY7duhV07HAOFQnyIu3J8WiIcWAD/08sOlSecmxhQ5Bu1Xp4mCF4EJmQiUMlCvlKGvCVbCSTikWA4iDqM65UYskuYx/ISyDFChs2M3osh7jXhCarYRqNnPARzczOYM4ZWyphx1w6DCbOrHMqtnvHwZfqAa7QAhsluDVrXDjOrruuoBEwoIGIxE7TpMBrNOdEiN/pJHoyFP8mXs73sEBjybbJT1TK6ee+OHT4sVaCSCDqBDhCGOgpjAeTjbjzEHDsRTxzDCYwJvQIOqmfW9gwY8tWhlXzR5bg7SyEsgG8JgAddXZ4bHV1eLeUyAYzuQdOZpWYCwzzIS2OuvIxysEw90FOH/0pbfBmK3Re7jvNSf27ZMa6V0bm5uVG3TFwurelhh6EeXit1kYNie9vhiySnzULHEMj6Xs94mIOUeh5SbdOZfsG4roPbdCL8mFtb3HLkFXC5cdRsELIbR77YM6fBJVke2xI/QSTbW10Ou3a4sor5CXx2NEBAIuHSqJT+mcD6cKVcMcNBiIJuaYh1lCPPjPW2w818t95eHwE196MuhzuzFD82lLRjcyvuXJxbAkNz3E0na3PkuaW5hx35GBTEQPQzs3RynTNDjWw1uxzu5KWxzNii28ZYKpfKS26TAoqnQIchpC+n5OVVNzZC4RzuyfCPR5wZUrLTrTPUqfHBosaya8ddCpyLMTA0SFYfOtECCD+Eijd2Sh72Z5dA4b1rfDAKvgwlsrne5bDLcLkUcKo++IlB5m063gTmoJldxuopDMoE40NxEPLuQCwGuSmabSA315Nh84gzwxSYfpcOrZuXhh23UVo9bhbidARDSwCNjh3GE2CGY5/qp3mQY0nce5ZO7HFnuD/ciyGUR075tLhaLkF9m10olZfR7FaWMrobDzNldEGLy9hMXFjAdiI+xkwo0oMhy+9Rvgxxv0mXtSA3WoBuVnNYQHxCwlxbAPM8rp5AvmZithZLwD9IxcFQc5DNriR6MLS4t2lk0ujJMFjOYHGIgR6K3wyUuVhNYZG4VkI71KHQxUco92MnCspgp2mjV8q9In57ZuMSK7LfAoHWk11WLB2GMUyzK7lTZtgxtPCJHWKafUa+slqqgD572mF7psFZh4JaS54tSUW87NDVIfhMNKvVUjZTWVtbq2QWSqsPnRLQ73Qx/E75BPIFkMN/maxLd3mhZ+ZtJ+ucL0cEhufaCuLgoNiJFiu35lFjp7uJmLPhYkbHDudKFUcONuguOoE5VrCt38sOi8mawpchJed3f4jfDQ52dJg1samvm4FMNofAdqLT1Y9lMOIHM27TH+XZXAm8KcoxhJgLoMNQt5WZmvGc8L3c0rls5syRDsMQ2KGO5dPqypkmxQp4Tx1Yx53qCeRjo+flfjcv7cGwyJkhA4an2hiDAIdh9NXAUHCtvIhm5jYLzRh41Gxpad7JPJ21J2y63ZofK2XBy8ZME5sYOZQvliuowwH/4IUF7bph870MiTCpnfx4muB33wFDFhgIvYLq6dZS1ozBpMSF7CAYmbOQ7bT13S7GYjljmq7QWS12Foidtn64Gn0V9VvnKAoOQ64EQYdWYYN0LtIRBztgftRhrGLiGra5li2VlsZWl5ZKuewaVMOxmO7HWWr6cRU8aK5lcqWl1dWxsfKx3AQd3g/dP8dQEijFvSY890LidUi4o5W6dTeSc+yQBe6jHZrY1Hej3eLD+Xl3EW0eu8COHYJXCWSX3NJwceVEvgRyM1YNvfL52RmGiiCRjYLFnaGz38RdJR3EQIEMZb/DcGEOk1Ls6YNPwV0ZAT/k2djaKAHDmF56iPISeFB3l4IrB880txCrDrwKAcPTY0l4OcmUxduXimx8lyjueUUdujPV0WFwcTkXCMcjp3eToMUFsmOLYWS4spoNnNlr4mzNCAZyy/8Mgg4H/Mx509MMN6c0zp5GElnzL2Do7E87tkPRZRgL6OghTbCrzsc3XQTxwD14BDbnHjmRuy8IBmKOHYIOwXV1KFK8NHanyXj3aUTy6BEVOq6mw5Awd5Z2PnykWh16/f790NBQNRZJmA4NzNocYjr8F6gODb3HJ1Srx+chBr70XcWCk3XCkEhU1o6aYI68GW41qXC8z84lSFjAh7NUj0Sqrw9v+6LRgftR3334NXD/weH7qrNJ6gdQJMjfHz54dT96Jxq978Mf3+3De1UUQzwMgS89pUNQoqxNP+LNEMz+aJwx6dyogWgoWo0MHb595/P57gIGEPiHL+p79/bwfSTxOhF5/wbk0RP5XUfu80VDh0ORavR8TkOpJLNHW0Tly1AQyd4wY+fPKzD0vQlFfQ6x0Gk4R3zRdw8ePAD2oQtyPCG+gXdv3/juXsi8FZk1j3gzFCl5YVj0fL4feBcK3XXhkrp7osjQQEfgc4/h486h02Jf6MKeKEqplt8jfC+PJ1Qjz57agna2aBPNWd/lMWuePW8SU7VCi3JetwAXU0wXzzcWBGno9uUxdG6fMGW4Wkk5r1tQJrbTDXJuVLy1k0IvB2ev95l31SjFApjLDSM+AeaM9vsOEc+OKkqMCexyEHAv+5l31UTyLGnzZghhmB2Nazyum6GqIG0OW6rAuU8DzvRj0ubS/4K8oonhkK8vFeCM2lghchhLVnAktdtuzz5CwKymuc2lZhNoI1kUZI1zbUEhNOynbR59aJVs5ZkgaPxv3ybZBpcLV6V2cp/HOBdByRafayAaxgGPYS5CUGoGjytXWXObc8Z2DJoi4+tE7HucqqWfca7vT6CR+tM6FVS5byNITJLJ9DDXW+GcgkAVbXtCE/u4G0tgRH1ivICQ2LchPju8oNDn6X/1c3hBIanvh9uyeD2zVGSSyv4otPtpiJTWko+JyLm+PxmdMYUcpHewv9CnG50wmTXzmihdE0MXI1C6iUKfUiqB/ivN90YDF0Gt9QlLlZnal6kqtAvTnC87vACq1GZ2GBX6sgYtkknDvsY77ToAbzeShqDYj8+BdxJ8wfXGBt3AKNU+zNji1X8OQYO68APjvhXqPJgoMXu4mbrytIOCcX8Ytq//nt54hwRSM3aIeNXzlJHNpy+htL9uhghGW+kWEa86ZtWNTaJIjPM+mgvA7qagskmjjj3UK3pTMaXJxC40GThpzo3g7mBUsaYLz+mV9RaBFm1PrbeV6/ajx6CCDIF/+OruOpQSBG3aKPJe2O4NYKjS9nj+yra8qCr7y3jp3JP5ZgCNRZCezKxfSYcY75pNdo3HRFKvpyrsBUrs/JStXvqupkJKFtmI0127CXHiNBRWzK/b6iVDP00JMmkZm+pNMcFPgHIYtfhEvWToF2XWerpJpOvqzXwOkN0U8/niJTv9ImgQimouXxHwdaB4lydirxdqkIfQ82uAXwRRFlWCGmSCzHkd5kvBFKn9YeYjUYWv+uKHY4AJKmzXGOG8g+1rALYoWX883Yd0UhbUr3+5oliTxj6R+teAvSyYAJWwvJuetIggfv19hmWl/Ue6od5EGzwG3kyOqkLL2G7TLrez+izwi1vs8XSdiIzdXB26kEi9MFGEqge/uepLXyRDIC0mh69pkenrAMVUyp4oPJOcr1b50ldBudQw1tvnN8rdRMAsFRRmTSZ3GFG/9D61oqiwTeN7KyXcoC/q6gmFSKKsslbyg02+VCUiaU8/HWEKu6Fh8CwEoiqywEhtKv+SwB/0c2ED73cJ8Z0Up2bgyUz+OxA8Bqrl3zsWlECfs0VIDARH4X8eXNcq6DdDhMyrZawXifK56IZpDGlPGhBB+7Mu0FdoVC1OGfvsc7NUFhV6kH/6TCGdL4f8W0GC7MvaQYdDelazoqSNGH/azvclfkuyfs2guNvnYz65oamSQi9WVZIkSsU/k5sW5Xr386uFIKntv4ymLeEXlZ41SA2SM7ZvTNUI3jr4mj7f5UEJKK++/nTEuhD+ITIcbCd3LZipypd/UeKNgwLKUwVrN7leI+RsQq1orWThOZOdTcF/31nqfHMj5JzFpjGJt0FilEINSagskdrEv/dAgXjtFON8XdqVAx2l9qJQeMGcZQ6YkrLankz+Wfsbq+4sMFJAivPX0/GXeKWGLFJtozDTstSvrSFvMigVRVbcTj86SCmUPf8/mLMwVWW+36jUPwhojkwE7TXyxpFt/2VM1WHeSimuX/vVf1Dnu1T2ZwqF4Q13dl77AvbVg0kKsXd328qVL4nfFOBXFqu4l+u6P0jf4HynvMy0/xYHcxGMQorDqPDfq0MPHjx48ODBgwcPHjx48ODBgwcPHjx48ODBgwcPHjx48ODBgwcPHm44/h/TStFNzm3MbwAAAABJRU5ErkJggg==" 
                         alt="m" 
                         width="30" 
                         height="30"/> --}}
                         <small>Trenova</small>
                     </i>
              </div>
          
              {{-- search bar --}}
           
              {{-- <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search' ></i>
              </div> --}}
              {{-- end of search bar --}}
    
              {{-- <div class="profile-details">
                <!--<img src="images/profile.jpg" alt="">-->
                <span class="admin_name"><small style="color: blue">Trenova</small></span>
                <i class='bx bx-chevron-down' ></i>
              </div> --}}
            </nav>
    
    
            <div class="home-content">
              <div class="overview-boxes">
                <div class="box">
                  <div class="right-side">
                    <div class="box-topic">Total Order</div>
                    <div class="number">40,876</div>
                    <div class="indicator">
                      <i class='bx bx-up-arrow-alt'></i>
                      <span class="text">Up from yesterday</span>
                    </div>
                  </div>
                  <i class='bx bx-cart-alt cart'></i>
                </div>
                <div class="box">
                  <div class="right-side">
                    <div class="box-topic">Total Sales</div>
                    <div class="number">38,876</div>
                    <div class="indicator">
                      <i class='bx bx-up-arrow-alt'></i>
                      <span class="text">Up from yesterday</span>
                    </div>
                  </div>
                  <i class='bx bxs-cart-add cart two' ></i>
                </div>
                <div class="box">
                  <div class="right-side">
                    <div class="box-topic">Total Profit</div>
                    <div class="number">$12,876</div>
                    <div class="indicator">
                      <i class='bx bx-up-arrow-alt'></i>
                      <span class="text">Up from yesterday</span>
                    </div>
                  </div>
                  <i class='bx bx-cart cart three' ></i>
                </div>
                <div class="box">
                  <div class="right-side">
                    <div class="box-topic">Total Return</div>
                    <div class="number">11,086</div>
                    <div class="indicator">
                      <i class='bx bx-down-arrow-alt down'></i>
                      <span class="text">Down From Today</span>
                    </div>
                  </div>
                  <i class='bx bxs-cart-download cart four' ></i>
                </div>
              </div>
        
    {{-- section --}}
    <section class="grid">
        <article></article>
        <article></article>
        <article></article>
        <article></article>
        <article></article>
        <article></article>
        <article></article>
        <article></article>
      </section>
    {{-- end section --}}
    
    
    
    
    
    
    
    
              <div class="sales-boxes">
                <div class="recent-sales box">
                  <div class="title">Recent Sales</div>
                  <div class="sales-details">
                    <ul class="details">
                      <li class="topic">Date</li>
                      <li><a href="#">02 Jan 2021</a></li>
                      <li><a href="#">02 Jan 2021</a></li>
                      <li><a href="#">02 Jan 2021</a></li>
                      <li><a href="#">02 Jan 2021</a></li>
                      <li><a href="#">02 Jan 2021</a></li>
                      <li><a href="#">02 Jan 2021</a></li>
                      <li><a href="#">02 Jan 2021</a></li>
                    </ul>
                    <ul class="details">
                    <li class="topic">Customer</li>
                    <li><a href="#">Alex Doe</a></li>
                    <li><a href="#">David Mart</a></li>
                    <li><a href="#">Roe Parter</a></li>
                    <li><a href="#">Diana Penty</a></li>
                    <li><a href="#">Martin Paw</a></li>
                    <li><a href="#">Doe Alex</a></li>
                    <li><a href="#">Aiana Lexa</a></li>
                    <li><a href="#">Rexel Mags</a></li>
                     <li><a href="#">Tiana Loths</a></li>
                  </ul>
                  <ul class="details">
                    <li class="topic">Sales</li>
                    <li><a href="#">Delivered</a></li>
                    <li><a href="#">Pending</a></li>
                    <li><a href="#">Returned</a></li>
                    <li><a href="#">Delivered</a></li>
                    <li><a href="#">Pending</a></li>
                    <li><a href="#">Returned</a></li>
                    <li><a href="#">Delivered</a></li>
                     <li><a href="#">Pending</a></li>
                    <li><a href="#">Delivered</a></li>
                  </ul>
                  <ul class="details">
                    <li class="topic">Total</li>
                    <li><a href="#">$204.98</a></li>
                    <li><a href="#">$24.55</a></li>
                    <li><a href="#">$25.88</a></li>
                    <li><a href="#">$170.66</a></li>
                    <li><a href="#">$56.56</a></li>
                    <li><a href="#">$44.95</a></li>
                    <li><a href="#">$67.33</a></li>
                     <li><a href="#">$23.53</a></li>
                     <li><a href="#">$46.52</a></li>
                  </ul>
                  </div>
                  <div class="button">
                    <a href="#">See All</a>
                  </div>
                </div>
                <div class="top-sales box">
                  <div class="title">Top Seling Product</div>
                  <ul class="top-sales-details">
                    <li>
                    <a href="#">
                      <!--<img src="images/sunglasses.jpg" alt="">-->
                      <span class="product">Vuitton Sunglasses</span>
                    </a>
                    <span class="price">$1107</span>
                  </li>
                  <li>
                    <a href="#">
                       <!--<img src="images/jeans.jpg" alt="">-->
                      <span class="product">Hourglass Jeans </span>
                    </a>
                    <span class="price">$1567</span>
                  </li>
                  <li>
                    <a href="#">
                     <!-- <img src="images/nike.jpg" alt="">-->
                      <span class="product">Nike Sport Shoe</span>
                    </a>
                    <span class="price">$1234</span>
                  </li>
                  <li>
                    <a href="#">
                      <!--<img src="images/scarves.jpg" alt="">-->
                      <span class="product">Hermes Silk Scarves.</span>
                    </a>
                    <span class="price">$2312</span>
                  </li>
                  <li>
                    <a href="#">
                      <!--<img src="images/blueBag.jpg" alt="">-->
                      <span class="product">Succi Ladies Bag</span>
                    </a>
                    <span class="price">$1456</span>
                  </li>
                  <li>
                    <a href="#">
                      <!--<img src="images/bag.jpg" alt="">-->
                      <span class="product">Gucci Womens's Bags</span>
                    </a>
                    <span class="price">$2345</span>
                  <li>
                    <a href="#">
                      <!--<img src="images/addidas.jpg" alt="">-->
                      <span class="product">Addidas Running Shoe</span>
                    </a>
                    <span class="price">$2345</span>
                  </li>
        <li>
                    <a href="#">
                     <!--<img src="images/shirt.jpg" alt="">-->
                      <span class="product">Bilack Wear's Shirt</span>
                    </a>
                    <span class="price">$1245</span>
                  </li>
                  </ul>
                </div>
              </div>
              <br><br><br><br><br><br><br><br>
              <marquee>bla bla bla...................bla bla bla...................bla bla bla...................</marquee>
            </div>
          </section>
    {{--     
    <marquee>bla bla bla...................</marquee> --}}
    
          <script>
           let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
          sidebar.classList.toggle("active");
          if(sidebar.classList.contains("active")){
          sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
        }else
          sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
         </script>
        
        </body>
        </html>
        
        
    
</x-guest-layout>