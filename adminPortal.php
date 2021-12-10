<?php
    session_start();
    require 'includes//dbh.inc.php';

    $sqlCount="SELECT count(applicant_id) AS total FROM phakamani_applicants WHERE programType ==='Learnership'";
    $countResult =mysqli_query($conn,$sqlCount);
    $valueCount = mysqli_fetch_assoc($countResult);
    $num_rows=$valueCount['total'];
?>
<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset="UTF-8">
        <meta name ="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
        <title>Admin portal</title>
        <link rel ="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel ="stylesheet" href="admin.css">
        <link rel ="stylesheet" href="adminPortal.css">
    </head>
    <body>
        <div class="sidebar">
            <div class="sidebar-brand">
                <div class="brand-flex">
                    <div class ="brand-icons">
                        <span class ="las la-bell"></span>
                        <span class ="las la-user-circle"></span>
                    </div>
                </div>
            </div>
            <div class="sidebar-main">
               <img src="img/6.jpg" width ="250px" alt="">  
               <div>
                   <h3><?php echo $_SESSION['adminName'] ?> <?php echo $_SESSION['adminSurname'] ?></h3>
                   <span><?php echo $_SESSION['adminEmail'] ?></span>
               </div>
            </div>
            <div class="sidebar-menu">
                <div class="menu-head">
                    <span>Applications</span>
                </div>
                <ul>
                    <li>
                        <a href="">
                            <span class="las la-clock"></span>
                            Calender
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-envelope"></span>
                            Mailbox
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-check-circle"></span>
                            Update-Status
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-users"></span>
                            Contacts
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-list"></span>
                            Applicants
                        </a>
                    </li>
                </ul>
            </div>
        </div>
   </div>
   <div class ="main-content">
       <header>
           <div class="menu-toggle">
               <label for="">
                   <span class="las la-bars"></span>
               </label>
           </div>
           <div class="header-icons">
               <span class="las la-search"></span>
               <span class="las la-bookmark"></span>
               <span class="las la-sms"></span>
           </div>
       </header>
       <main>
          <div class ="page-header">
              <div>
                  <h1>Learnership Dashboard</h1>
                  <small>view learnership applicants</small>
              </div>

              <div class ="header-actions">
                  <button>
                      <span class="las la-file-export"></span>
                      Export
                  </button>
                  <button>
                      <span class="las la-tools"></span>
                      Settings
                  </button>
              </div>
          </div> 
          <div class="cards">
              <div class="card-single">
              <div class="card-flex">
                  <div class="card-infor">
                        <div class="card-head">
                            <span>Learnership Applicants</span>
                            <small>Number of Applicants</small>
                        </div>
                        <h2><?php echo $num_rows?></h2>
                  </div>
                  <div class="card-chart">
                      <span class ="las la-book"></span>
                  </div>
              </div>
              </div>
              <div class="card-single">
              <div class="card-flex">
                  <div class="card-infor">
                        <div class="card-head">
                            <span>Learnership Application viewed</span>
                            <small>Number of Applications viewed</small>
                        </div>
                        <h2>5656</h2>
                  </div>
                  <div class="card-chart">
                      <span class ="las la-book"></span>
                  </div>
              </div>
              </div>
              <div class="card-single">
              <div class="card-flex">
                  <div class="card-infor">
                        <div class="card-head">
                            <span>Learnership Applicants short listed</span>
                            <small>Number of Applicants short listed</small>
                        </div>
                        <h2>5656</h2>
                  </div>
                  <div class="card-chart">
                      <span class ="las la-book"></span>
                  </div>
              </div>
              </div>
          </div>
       </main>
   </div>
</body>
</html>
