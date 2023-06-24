
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from betlio2.vercel.app/main/matchboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Jun 2023 07:04:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/swiper.css">
  <link rel="stylesheet" href="../../cdn.jsdelivr.net/npm/bootstrap-icons%401.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/css/style.css" />
  <title>{{env('APP_NAME')}}</title>
</head>

<body>
  <div id="preloader">
    <div class="img-container">
      <img class="img-fluid" height="150" width="150" src="assets/img/logo.png" alt="">
    </div>
  </div>
  <!-- welcome slider Section -->
  <section class="matchboard mx-3 position-relative">
    <div class="bottom-navigation">
      <a href="matchboard.html" class="single-nav active">
        <i class="bi bi-trophy"></i>
        <span>Matches</span>
      </a>
      <a href="sports.html" class="single-nav">
        <i class="bi bi-dribbble"></i>
        <span>Sports</span>
      </a>
      <a href="mybets.html" class="single-nav">
        <i class="bi bi-play-circle"></i>
        <span>InPlay</span>
      </a>
      <a href="news.html" class="single-nav">
        <i class="bi bi-globe-americas"></i>
        <span>News</span>
      </a>
      <a href="statistics.html" class="single-nav">
        <i class="bi bi-globe"></i>
        <span>Statistic</span>
      </a>
    </div>
    <div class="d-flex justify-content-end align-items-center mt-3 mb-2 gap-2">
      <a href="deposit.html">
        <img src="assets/img/plus.png" width="25" alt="">
      </a>
      <h6 class="mb-0">$299</h6>

      <div class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
        aria-controls="offcanvasRight">
        <img src="assets/img/profile.png" width="35" alt="">
      </div>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div>
          <section class="profile px-3">
            <div class="d-flex justify-content-between align-items-center py-4">
              <a href="#" data-bs-dismiss="offcanvas">
                <i class="bi bi-arrow-left text-white"></i>
              </a>
              <p class="mb-0 text-white">Profile</p>
              <a href="edit-profile.html">
                <i class="bi bi-pencil-square text-white"></i>
              </a>
            </div>
            <div class="d-flex justify-content-between align-items-center pb-3">
              <div class="d-flex gap-2">
                <img src="assets/img/profile.png" width="55" height="55" alt="">
                <div>
                  <h4 class="text-white mb-0">Peter Moses</h4>
                  <span class="text-white">@petermoses32</span>
                </div>
              </div>
              <a href="#" class="outline-btn py-1 px-4">Follow</a>
            </div>
            <div class="follow pb-3">
              <div>
                <h5 class="text-white mb-1">2425</h5>
                <span class="text-blue">Followers</span>
              </div>
              <div class="divider"></div>
              <div>
                <h5 class="text-white mb-1">24</h5>
                <span class="text-blue">Following</span>
              </div>
            </div>
            <div class="profile-card">
              <div class="card-top d-flex justify-content-between">
                <div>
                  <p class="mb-1">My Balance</p>
                  <h3>$123.00</h3>
                </div>
                <div class="d-flex gap-2 align-items-center">
                  <a class="gradient-btn py-2 px-3 fs-6 fw-normal" href="deposit.html">Deposit</a>
                  <a class="outline-btn-small fs-6" href="withdraw.html">Withdraw</a>
                </div>
              </div>
              <div class="card-bottom">
                <div class="d-flex flex-column align-items-center gap-2 stat-box">
                  <div class="state-circle">
                    <h6 class="mb-0">4.45</h6>
                  </div>
                  <p>Prediction</p>
                </div>
                <div class="d-flex flex-column align-items-center gap-2 stat-box">
                  <div class="state-circle">
                    <h6 class="mb-0">140</h6>
                  </div>
                  <p>Win</p>
                </div>
                <div class="d-flex flex-column align-items-center gap-2 stat-box">
                  <div class="state-circle">
                    <h6 class="mb-0">60%</h6>
                  </div>
                  <p>Win Rate</p>
                </div>
                <div class="d-flex flex-column align-items-center gap-2 stat-box">
                  <div class="state-circle">
                    <h6 class="mb-0">$987</h6>
                  </div>
                  <p>Profit</p>
                </div>
              </div>
            </div>
            <a href="mybets.html" class="profile-row mt-3">
              <div class="d-flex align-items-center gap-2">
                <img src="assets/img/quest.png" alt="">
                <p class="fw-500 mb-0">My Quest</p>
              </div>
              <i class="bi bi-chevron-right"></i>
            </a>
            <div class="profile-row mt-3">
              <a href="notifications.html" class="d-flex align-items-center gap-2">
                <img src="assets/img/notification.png" alt="">
                <p class="fw-500 mb-0">Notification</p>
              </a>
              <label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
              </label>
            </div>
            <a href="#" class="profile-row mt-3">
              <div class="d-flex align-items-center gap-2">
                <img src="assets/img/prediction.png" alt="">
                <p class="fw-500 mb-0">My Prediction</p>
              </div>
              <i class="bi bi-chevron-right"></i>
            </a>
            <a href="#" class="profile-row mt-3">
              <div class="d-flex align-items-center gap-2">
                <img src="assets/img/exchange.png" alt="">
                <p class="fw-500 mb-0">My Exchange History</p>
              </div>
              <i class="bi bi-chevron-right"></i>
            </a>
            <a href="messages.html" class="profile-row mt-3">
              <div class="d-flex align-items-center gap-2">
                <img src="assets/img/message.png" alt="">
                <p class="fw-500 mb-0">Message</p>
              </div>
              <i class="bi bi-chevron-right"></i>
            </a>
            <a href="invite.html" class="profile-row mt-3">
              <div class="d-flex align-items-center gap-2">
                <img src="assets/img/invite-icon.png" alt="">
                <p class="fw-500 mb-0">Invite Friends</p>
              </div>
              <i class="bi bi-chevron-right"></i>
            </a>
            <a href="wallet.html" class="profile-row mt-3">
              <div class="d-flex align-items-center gap-2">
                <img src="assets/img/wallet.png" alt="">
                <p class="fw-500 mb-0">Wallet</p>
              </div>
              <i class="bi bi-chevron-right"></i>
            </a>
            <a href="#" class="profile-row mt-3">
              <div class="d-flex align-items-center gap-2">
                <img src="assets/img/language.png" alt="">
                <p class="fw-500 mb-0">Language</p>
              </div>
              <i class="bi bi-chevron-right"></i>
            </a>
            <a href="#" class="profile-row mt-3">
              <div class="d-flex align-items-center gap-2">
                <img src="assets/img/feedback.png" alt="">
                <p class="fw-500 mb-0">Feedback</p>
              </div>
              <i class="bi bi-chevron-right"></i>
            </a>
            <a href="terms.html" class="profile-row my-3">
              <div class="d-flex align-items-center gap-2">
                <img src="assets/img/terms.png" alt="">
                <p class="fw-500 mb-0">Terms & Policy</p>
              </div>
              <i class="bi bi-chevron-right"></i>
            </a>
          </section>
        </div>
      </div>

    </div>
    <h1 class="fw-500 mb-3">User Dashboard</h1>
    <div class="search-box">
      <div>
        <i class="bi bi-search"></i>
        <input type="text" placeholder="Search...">
      </div>
      <i class="bi bi-mic"></i>
    </div>
    <ul class="nav nav-pills my-3 d-flex justify-content-between" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
          type="button" role="tab" aria-controls="pills-home" aria-selected="true"><i class="bi bi-list"></i>
          All</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
          type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><i
            class="bi bi-circle-fill live"></i> Live</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
          type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="bi bi-trophy"></i>
          Top</button>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
        tabindex="0">
        <div class="bet-card d-flex align-items-center justify-content-between mb-3">
          <div class="py-3 ps-3">
            <h5>Make bets Profitably</h5>
            <p class="small mb-0">Predict in multiple matches and win up to $100 000.</p>
          </div>
          <img width="110" src="assets/img/make-bet.png" alt="">
        </div>
        <h3>Games</h3>
        <div class="swiper game-slider">
          <div class="swiper-wrapper games">
            <div class="swiper-slide">
              <a href="#" class="game mt-2">
                <img width="30" src="assets/img/football.png" alt="">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="game mt-2">
                <img width="30" src="assets/img/horse.png" alt="">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="game mt-2">
                <img width="30" src="assets/img/tennis.png" alt="">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="game mt-2">
                <img width="30" src="assets/img/vollyball.png" alt="">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="game mt-2">
                <img width="30" src="assets/img/boxing.png" alt="">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="game mt-2">
                <img width="30" src="assets/img/handball.png" alt="">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="game mt-2">
                <img width="30" src="assets/img/tennis.png" alt="">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="game mt-2">
                <img width="30" src="assets/img/vollyball.png" alt="">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="game mt-2">
                <img width="30" src="assets/img/boxing.png" alt="">
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="game mt-2">
                <img width="30" src="assets/img/handball.png" alt="">
              </a>
            </div>

          </div>
        </div>
        <h3 class="mt-3 pb-2">Live Mathces</h3>
        <div class="swiper match-slider matches pb-3">
          <div class="swiper-wrapper">
            <div class="swiper-slide match-card-sm">
              <img width="35" src="assets/img/team1.png" alt="">
              <div>
                <p class="text-center mb-0">VS</p>
                <h3 class="text-blue mb-0 text-center">0:0</h3>
                <p class="text-center mb-0">21:16</p>
              </div>
              <img width="35" src="assets/img/team2.png" alt="">
            </div>
            <div class="swiper-slide match-card-sm">
              <img width="35" src="assets/img/team1.png" alt="">
              <div>
                <p class="text-center mb-0">VS</p>
                <h3 class="text-blue mb-0 text-center">0:0</h3>
                <p class="text-center mb-0">21:16</p>
              </div>
              <img width="35" src="assets/img/team2.png" alt="">
            </div>
            <div class="swiper-slide match-card-sm">
              <img width="35" src="assets/img/team1.png" alt="">
              <div>
                <p class="text-center mb-0">VS</p>
                <h3 class="text-blue mb-0 text-center">0:0</h3>
                <p class="text-center mb-0">21:16</p>
              </div>
              <img width="35" src="assets/img/team2.png" alt="">
            </div>
          </div>
        </div>
        <h3>Matches</h3>
        <a href="match-details.html" class="match-card mb-3">
          <p class="dark-text px-3 pt-3">Football,Champions League</p>
          <div class="card-inner">
            <div class="d-flex flex-column gap-2">
              <img width="65" src="assets/img/team1.png" alt="">
              <span class="score-btn">2.42</span>
            </div>
            <div>
              <p class="text-center mb-0 small">VS</p>
              <h3 class="text-blue mb-0 text-center">0:0</h3>
              <p class="text-center mb-0">21:16</p>
              <span class="score-btn mt-2 px-3">1.01</span>
            </div>
            <div class="d-flex flex-column gap-2">
              <img width="65" src="assets/img/team2.png" alt="">
              <span class="score-btn">1.79</span>
            </div>
          </div>
        </a>
        <a href="match-details.html" class="match-card mb-3">
          <p class="dark-text px-3 pt-3">Football,Champions League</p>
          <div class="card-inner">
            <div class="d-flex flex-column gap-2">
              <img width="65" src="assets/img/team3.png" alt="">
              <span class="score-btn">2.42</span>
            </div>
            <div>
              <p class="text-center mb-0 small">VS</p>
              <h3 class="text-blue mb-0 text-center">0:0</h3>
              <p class="text-center mb-0">21:16</p>
              <span class="score-btn mt-2 px-3">1.01</span>
            </div>
            <div class="d-flex flex-column gap-2">
              <img width="65" src="assets/img/team4.png" alt="">
              <span class="score-btn">1.79</span>
            </div>
          </div>
        </a>

      </div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
        <a href="match-details.html" class="match-card mb-3">
          <p class="dark-text px-3 pt-3">Football,Champions League</p>
          <div class="card-inner">
            <div class="d-flex flex-column gap-2">
              <img width="65" src="assets/img/team1.png" alt="">
              <span class="score-btn">2.42</span>
            </div>
            <div>
              <p class="text-center mb-0 small">VS</p>
              <h3 class="text-blue mb-0 text-center">0:0</h3>
              <p class="text-center mb-0">21:16</p>
              <span class="score-btn mt-2 px-3">1.01</span>
            </div>
            <div class="d-flex flex-column gap-2">
              <img width="65" src="assets/img/team2.png" alt="">
              <span class="score-btn">1.79</span>
            </div>
          </div>
        </a>
        <a href="match-details.html" class="match-card mb-3">
          <p class="dark-text px-3 pt-3">Football,Champions League</p>
          <div class="card-inner">
            <div class="d-flex flex-column gap-2">
              <img width="65" src="assets/img/team3.png" alt="">
              <span class="score-btn">2.42</span>
            </div>
            <div>
              <p class="text-center mb-0 small">VS</p>
              <h3 class="text-blue mb-0 text-center">0:0</h3>
              <p class="text-center mb-0">21:16</p>
              <span class="score-btn mt-2 px-3">1.01</span>
            </div>
            <div class="d-flex flex-column gap-2">
              <img width="65" src="assets/img/team4.png" alt="">
              <span class="score-btn">1.79</span>
            </div>
          </div>
        </a>
        <a href="match-details.html" class="match-card mb-3">
          <p class="dark-text px-3 pt-3">Football,Champions League</p>
          <div class="card-inner">
            <div class="d-flex flex-column gap-2">
              <img width="65" src="assets/img/team3.png" alt="">
              <span class="score-btn">2.42</span>
            </div>
            <div>
              <p class="text-center mb-0 small">VS</p>
              <h3 class="text-blue mb-0 text-center">0:0</h3>
              <p class="text-center mb-0">21:16</p>
              <span class="score-btn mt-2 px-3">1.01</span>
            </div>
            <div class="d-flex flex-column gap-2">
              <img width="65" src="assets/img/team4.png" alt="">
              <span class="score-btn">1.79</span>
            </div>
          </div>
        </a>
      </div>
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
        <a href="match-details.html" class="match-card mb-3 position-relative">
          <p class="dark-text px-3 pt-3">Football,Champions League</p>
          <div class="card-inner">
            <div class="d-flex flex-column gap-2">
              <img width="65" src="assets/img/team3.png" alt="">
              <span class="score-btn">2.42</span>
            </div>
            <div>
              <p class="text-center mb-0 small">VS</p>
              <h3 class="text-blue mb-0 text-center">0:0</h3>
              <p class="text-center mb-0">21:16</p>
              <span class="score-btn mt-2 px-3">1.01</span>
            </div>
            <div class="d-flex flex-column gap-2">
              <img width="65" src="assets/img/team4.png" alt="">
              <span class="score-btn">1.79</span>
            </div>
          </div>
          <div class="top-badge">
            <i class="bi bi-trophy"></i>
          </div>
        </a>
        <a href="match-details.html" class="match-card mb-3 position-relative">
          <p class="dark-text px-3 pt-3">Football,Champions League</p>
          <div class="card-inner">
            <div class="d-flex flex-column gap-2">
              <img width="65" src="assets/img/team4.png" alt="">
              <span class="score-btn">2.42</span>
            </div>
            <div>
              <p class="text-center mb-0 small">VS</p>
              <h3 class="text-blue mb-0 text-center">0:0</h3>
              <p class="text-center mb-0">21:16</p>
              <span class="score-btn mt-2 px-3">1.01</span>
            </div>
            <div class="d-flex flex-column gap-2">
              <img width="65" src="assets/img/team3.png" alt="">
              <span class="score-btn">1.79</span>
            </div>
          </div>
          <div class="top-badge">
            <i class="bi bi-trophy"></i>
          </div>
        </a>
        <a href="match-details.html" class="match-card mb-3 position-relative">
          <p class="dark-text px-3 pt-3">Football,Champions League</p>
          <div class="card-inner">
            <div class="d-flex flex-column gap-2">
              <img width="65" src="assets/img/team1.png" alt="">
              <span class="score-btn">2.42</span>
            </div>
            <div>
              <p class="text-center mb-0 small">VS</p>
              <h3 class="text-blue mb-0 text-center">0:0</h3>
              <p class="text-center mb-0">21:16</p>
              <span class="score-btn mt-2 px-3">1.01</span>
            </div>
            <div class="d-flex flex-column gap-2">
              <img width="65" src="assets/img/team2.png" alt="">
              <span class="score-btn">1.79</span>
            </div>
          </div>
          <div class="top-badge">
            <i class="bi bi-trophy"></i>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- JS file links -->
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/swiper.min.js"></script>
  <script src="assets/js/main.js"></script>

</body>
</html>
