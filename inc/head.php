<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="//stgteach.practically.com/teacherwebsite/styles/teacher/images/favicon.ico">
    <script src="//stgteach.practically.com/teacherwebsite/js/teacher/kit.fontawesome.js"></script>
    <!-- Stylesheet -->
     <link rel="stylesheet" href="css/teacher.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	 <script src="//stgteach.practically.com/teacherwebsite/js/teacher/main.min.js"></script>
	 <link href="//stgteach.practically.com/teacherwebsite/styles/teacher/owl.carousel.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="css/style.css">
     <link rel="stylesheet" type="text/css" href="css/chat.css">
</head>

<body class="red-bg" id="mainBody">
	<div class="page-load-animation">

<style>
    header.header .top-nav .right-nav ul li.header-notification>a svg {
        /* margin-right: 30px; */
		margin-right: 5px;
    }

	header.header .top-nav .right-nav ul li.header-notification#chat-icon>a svg path{
		fill:unset;
	}
</style>
<style>
    span.badge{
        white-space: unset;
        text-align: left;
    }
    .take-test-btn{
        color:#fff;
        background-color: #ff2020;
        border-radius: 50px;
        padding: 5px 20px;
    }
    .take-test-btn:hover{
        color:#fff;
        background-color: #ff5353;
    }
    .take-test-btn-white{
        color:#212121;
        background-color: #fff;
        border-radius: 50px;
        padding: 5px 20px;
    }
    .take-test-btn-white:hover{
        color:#212121;
        background-color: #f0f0f0;
    }
    .imgUp-wrap{
        border-radius: 20px;
        margin: 20px;
    }
    .Upnext .video-list-wrap .video-frame .video-lbl-link {
    position: absolute;
    left: 52px;
    width: 37PX;
    top: 0PX;
}
.Upnext .playBtn {
    position: absolute !important;
    left: 32px;
    top: 63px;
    border: none;
}
.Upnext .video-list-wrap .video-frame .play-btn {
    width: 42px;
    height: 42px;
    display: block;
    background-color: transparent;
    position: absolute;
    border-radius: 100%;
    text-align: center;
    line-height: 40px;
    top: -10px;
    left: -3px;
}
.dropdown-menu{
    z-index: 1 !important;
}
</style>
    <header class="header">
        <div class="top-nav">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-md-none left-nav">
                    <a href="#" class="ham-menu-click">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 42 42">
                            <path stroke="#fff" fill="#FFF" stroke-width=".5" d="M.816466552 1.6L17.1835334 1.6C17.634223 1.6 18 1.2416 18 .8 18 .3584 17.634223 1.81854531e-13 17.1835334 1.81854531e-13L.816466552 1.81854531e-13C.365777015 1.81854531e-13 0 .3584 0 .8 0 1.2416.365777015 1.6.816466552 1.6zM1.36422259 8.6L22.6357774 8.6C23.3888283 8.6 24 8.2416 24 7.8 24 7.3584 23.3888283 7 22.6357774 7L1.36422259 7C.611171722 7 0 7.3584 0 7.8 0 8.2416.611171722 8.6 1.36422259 8.6zM.452830189 15.6L11.5471698 15.6C11.7971321 15.6 12 15.2416 12 14.8 12 14.3584 11.7971321 14 11.5471698 14L.452830189 14C.202867925 14 0 14.3584 0 14.8 0 15.2416.202867925 15.6.452830189 15.6z" transform="translate(9 13)"/>
                        </svg>
                    </a>
                </div>
                <div class="right-nav desktop d-md-block d-none">
                    <ul class="right-menu d-flex justify-content-end align-items-center mb-0">
                        <form method="POST" action="//stgteach.practically.com/teacherwebsite/teacherapp/content" onsubmit="return validateSearch()">
                            <li class="header-search ml-2">
                                <a href="javascript:void(0)" class="nav-search-click">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 42 42">
                                        <path fill="#fff" d="M23.7924152,22.7760532 L17.9587492,16.9436807 C19.5236194,15.1450111 20.4710579,12.7982262 20.4710579,10.2332594 C20.4710579,4.58713969 15.8775782,0 10.2355289,0 C4.58815702,0 0,4.5924612 0,10.2332594 C0,15.8740576 4.59347971,20.4665188 10.2355289,20.4665188 C12.8010645,20.4665188 15.1483699,19.5192905 16.9474385,17.9547672 L22.7811045,23.7871397 C22.9194943,23.9254989 23.1057884,24 23.2867598,24 C23.4677312,24 23.6540253,23.9308204 23.7924152,23.7871397 C24.0691949,23.5104213 24.0691949,23.0527716 23.7924152,22.7760532 Z M1.43180306,10.2332594 C1.43180306,5.38004435 5.38123752,1.4368071 10.2302063,1.4368071 C15.0844977,1.4368071 19.0286094,5.38536585 19.0286094,10.2332594 C19.0286094,15.081153 15.0844977,19.0350333 10.2302063,19.0350333 C5.38123752,19.0350333 1.43180306,15.0864745 1.43180306,10.2332594 Z" transform="translate(9 9)" />
                                    </svg>
                                </a>

                                <input type="search" value="" id="headerSearch" name="headerSearch" class="form-control" placeholder="Search contents...">
                                <button value="1" id="headerSearchBtn" name="headerSearchBtn" type="submit" style="display : none;">Search</button>
                            </li>

                        </form>                       
                    </ul>
                </div>                
                <div class="right-nav">
                    <ul class="right-menu d-flex justify-content-end align-items-center mb-0">
                        <form method="POST" action="//stgteach.practically.com/teacherwebsite/teacherapp/content" onsubmit="return validateSearch()">
                        <li class="d-md-none header-search ml-2">
                            <a href="javascript:void(0)" class="nav-search-click">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 42 42">
                                    <path fill="#fff" d="M23.7924152,22.7760532 L17.9587492,16.9436807 C19.5236194,15.1450111 20.4710579,12.7982262 20.4710579,10.2332594 C20.4710579,4.58713969 15.8775782,0 10.2355289,0 C4.58815702,0 0,4.5924612 0,10.2332594 C0,15.8740576 4.59347971,20.4665188 10.2355289,20.4665188 C12.8010645,20.4665188 15.1483699,19.5192905 16.9474385,17.9547672 L22.7811045,23.7871397 C22.9194943,23.9254989 23.1057884,24 23.2867598,24 C23.4677312,24 23.6540253,23.9308204 23.7924152,23.7871397 C24.0691949,23.5104213 24.0691949,23.0527716 23.7924152,22.7760532 Z M1.43180306,10.2332594 C1.43180306,5.38004435 5.38123752,1.4368071 10.2302063,1.4368071 C15.0844977,1.4368071 19.0286094,5.38536585 19.0286094,10.2332594 C19.0286094,15.081153 15.0844977,19.0350333 10.2302063,19.0350333 C5.38123752,19.0350333 1.43180306,15.0864745 1.43180306,10.2332594 Z" transform="translate(9 9)"/>
                                </svg>
                            </a>
                            
                            <input type="search" value="" id="headerSearch" name="headerSearch" class="form-control" placeholder="Search contents...">
                            <button value = "1" id="headerSearchBtn" name="headerSearchBtn" type="submit" style="display : none;" >Search</button>
                        </li>

                            </form>
                        <li class="header-info ml-3">
						                            <img src="https://stage.corsalite.com/fileserverapp/files/shared/user/7/73931/73931.png" alt="" title="">
                            <div class="dropdown" style=" display: inline-block;">
                                <button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding: 0;">
                                    Chaithanya                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="profile.php">My Profile</a>
                                    <a class="dropdown-item" href="#">Refer Friend</a>
									<a class="dropdown-item" href="#">Help & Feedback</a>
                                    <a class="dropdown-item" href="#">Sign Out</a>
                                </div>
                            </div>
                        </li>                             
                        <li class="header-notification" data-toggle="modal" data-target="#modal-right" data-toggle-class="modal-open-aside">
                            <a href="#" data-toggle="modal" data-target="#modal-right" data-toggle-class="modal-open-aside" class="nav-notify-click1">  <!-- class="nav-notify-click"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 42 42">
                                    <path stroke="#fff" stroke-width=".9" d="M21.5989983,15.36 C22.7897406,15.36 23.76,16.3283492 23.76,17.52 C23.76,18.7116137 22.7899716,19.68 21.5952513,19.68 L2.40474874,19.68 C1.20892315,19.68 0.24,18.7132612 0.24,17.52 C0.24,16.3284911 1.20824477,15.36 2.40100171,15.36 C2.79687758,15.36 3.12,15.036679 3.12,14.6391632 L3.12,8.87963971 C3.12,3.9742045 7.09501814,0 12,0 C16.9049777,0 20.88,3.97519003 20.88,8.87963971 L20.88,14.6391632 C20.88,15.0394279 21.2007278,15.36 21.5989983,15.36 Z M21.5989983,15.84 C20.9356833,15.84 20.4,15.3045768 20.4,14.6391632 L20.4,8.87963971 C20.4,4.24028218 16.6398765,0.48 12,0.48 C7.36009282,0.48 3.6,4.23932318 3.6,8.87963971 L3.6,14.6391632 C3.6,15.3017096 3.06204034,15.84 2.40100171,15.84 C1.47336878,15.84 0.72,16.5935604 0.72,17.52 C0.72,18.4479217 1.4737776,19.2 2.40474874,19.2 L21.5952513,19.2 C22.5250568,19.2 23.28,18.4463348 23.28,17.52 C23.28,16.5936578 22.5248554,15.84 21.5989983,15.84 Z M8.4,20.4 L8.88,20.4 C8.88,22.1231284 10.2768716,23.52 12,23.52 C13.7231284,23.52 15.12,22.1231284 15.12,20.4 L15.6,20.4 C15.6,22.3882251 13.9882251,24 12,24 C10.0117749,24 8.4,22.3882251 8.4,20.4 Z" transform="translate(9 9)"/>
                                </svg>
                            </a>
                            <span class="notify-count">0</span>
                        </li>
                        <li class="header-notification" id="chat-icon">
                            <a href="#">  <!-- class="nav-notify-click"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 172 172" style=" fill:#000000;"><g transform=""><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="0.1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g id="original-icon" fill="#777777">
                                    <path d="M28.66667,21.5c-7.88333,0 -14.33333,6.45 -14.33333,14.33333v86l21.5,-21.5h21.5v21.5c0,7.88333 6.45,14.33333 14.33333,14.33333h64.5l21.5,21.5v-86c0,-7.88333 -6.45,-14.33333 -14.33333,-14.33333h-28.66667v-21.5c0,-7.88333 -6.45,-14.33333 -14.33333,-14.33333zM28.66667,35.83333h71.66667v50.16667h-71.66667zM114.66667,71.66667h28.66667v50.16667h-71.66667v-21.5h28.66667c7.88333,0 14.33333,-6.45 14.33333,-14.33333z"></path></g><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path>
                                </g>
                            </g>
                                </svg>
							</a>
                            <span class="notify-count">0</span>
                        </li>
                        </ul>
                </div>
            </div>
        </div>

        <div class="sidebar-wrapper longEnough mCustomScrollbar">
            <div class="before-radius add"></div>
            <div class="after-radius add"></div>            
            <div class="close-sidebar">
                <a href="javascript:void(0)" class="menu-back-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42">
                        <path stroke="#fff" style="fill: white;" stroke-width=".875" d="M17.1509375,13.153125 C17.0182292,13.0510417 16.8651042,13 16.6915625,13 C16.5282292,13.0102083 16.3904167,13.0816667 16.278125,13.214375 L10.153125,20.5796875 L10.1071875,20.625625 C10.1071875,20.65625 10.091875,20.686875 10.06125,20.7175 L10.0459375,20.748125 L10,20.9778125 L10.06125,21.238125 C10.0714583,21.2483333 10.0867708,21.26875 10.1071875,21.299375 L16.278125,28.7259375 C16.3495833,28.8178125 16.4363542,28.8841667 16.5384375,28.925 C16.6507292,28.955625 16.7579167,28.9658333 16.86,28.955625 C16.9722917,28.9352083 17.0692708,28.8892708 17.1509375,28.8178125 C17.2326042,28.7463542 17.2938542,28.6595833 17.3346875,28.5575 C17.3857292,28.4554167 17.3959375,28.3482292 17.3653125,28.2359375 C17.3448958,28.1338542 17.2989583,28.036875 17.2275,27.945 L11.929375,21.5903125 L32.1834375,21.5903125 C32.3569792,21.5903125 32.4998958,21.5290625 32.6121875,21.4065625 C32.7346875,21.2942708 32.7959375,21.1513542 32.7959375,20.9778125 C32.7959375,20.8042708 32.7346875,20.65625 32.6121875,20.53375 C32.4998958,20.4214583 32.3569792,20.3653125 32.1834375,20.3653125 L11.929375,20.3653125 L17.2275,13.9953125 C17.3295833,13.8626042 17.3755208,13.7196875 17.3653125,13.5665625 C17.3448958,13.3930208 17.2734375,13.2552083 17.1509375,13.153125 Z"/>
                    </svg>
                </a>
            </div>
            <div class="sidebar-menu">
            <ul class="list desktop">                           
                <li>
                    <a href="index.php" class="homeico">
                        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42">
                            <g fill-rule="evenodd" stroke="#000" stroke-width="1.2" transform="translate(11 9)">
                                <path fill="none" d="M1.39835044,6.96565664 L8.97669139,1.36004704 C10.0626849,0.55675041 11.5516096,0.578316114 12.6138824,1.41272841 L19.6811201,6.96402359 C20.5137876,7.61808155 21,8.61827516 21,9.67710801 L21,20.55 C21,22.4553824 19.4553824,24 17.55,24 L3.45,24 C1.54461761,24 -6.54836376e-16,22.4553824 0,20.55 L0,9.73932462 C-1.33972442e-16,8.64535662 0.518842027,7.61621866 1.39835044,6.96565664 Z" />
                                <line x1="10.5" x2="10.5" y1="23" y2="17" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                        <span class="menu-name">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="homeico">
                        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42">
                            <g fill-rule="evenodd" stroke="#000" stroke-width="1.2" transform="translate(11 9)">
                                <path fill="none" d="M1.39835044,6.96565664 L8.97669139,1.36004704 C10.0626849,0.55675041 11.5516096,0.578316114 12.6138824,1.41272841 L19.6811201,6.96402359 C20.5137876,7.61808155 21,8.61827516 21,9.67710801 L21,20.55 C21,22.4553824 19.4553824,24 17.55,24 L3.45,24 C1.54461761,24 -6.54836376e-16,22.4553824 0,20.55 L0,9.73932462 C-1.33972442e-16,8.64535662 0.518842027,7.61621866 1.39835044,6.96565664 Z" />
                                <line x1="10.5" x2="10.5" y1="23" y2="17" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                        <span class="menu-name">To Do</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="homeico">
                        <svg width="42" height="42" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <!-- Generator: Sketch 64 (93537) - https://sketch.com -->
                            <title>virtual session icon</title>
                            <desc>Created with Sketch.</desc>
                            <g id="virtual-session-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(3.000000, 6.000000)">
                                    <g id="Group-7">
                                        <path d="M24.48,2.28 L24.48,10.6384528 M19.1056613,17.28 L0.72,17.28 L0.72,2.28" id="Shape" stroke="#FFFFFF" stroke-width="1.44" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <polygon id="Rectangle-Copy-11" stroke="#FFFFFF" stroke-width="1.44" stroke-linecap="round" stroke-linejoin="round" points="0 0 5.82263548 0 25.2 0 25.2 2.16 0 2.16"></polygon>
                                        <path d="M13.4278757,7.05248058 L16.1889316,11.9192746 C16.3026587,12.1197363 16.2323463,12.3744366 16.0318846,12.4881637 C15.9690996,12.5237832 15.8981487,12.5425076 15.8259635,12.5425076 L10.3038516,12.5425076 C10.0733766,12.5425076 9.88653962,12.3556706 9.88653962,12.1251956 C9.88653962,12.0530104 9.90526401,11.9820595 9.94088352,11.9192746 L12.7019395,7.05248058 C12.8156665,6.85201884 13.0703669,6.78170647 13.2708286,6.89543352 C13.3364027,6.93263535 13.3906738,6.98690652 13.4278757,7.05248058 Z" id="Triangle" fill="#FFFFFF" transform="translate(13.064908, 9.477600) rotate(-270.000000) translate(-13.064908, -9.477600) "></path>
                                        <line x1="12.24" y1="17.784" x2="12.24" y2="19.944" id="Line-5-Copy-2" stroke="#FFFFFF" stroke-width="1.44" stroke-linecap="round" stroke-linejoin="round"></line>
                                    </g>
                                    <g id="Group-6" transform="translate(20.000000, 12.000000)" fill="#FFFFFF">
                                        <g id="Group-5">
                                            <path d="M5.60328219,3.3 C6.45152779,4.07421433 7,5.30518089 7,6.69143118 C7,9.03457693 0,9.03457693 0,6.69143118 C0,5.30518089 0.548472207,4.07421433 1.39671781,3.3 C1.84053841,3.99078478 2.61678272,4.44879049 3.5,4.44879049 C4.32842712,4.44879049 5.0627417,4.04584676 5.51764502,3.42525802 Z" id="Combined-Shape"></path>
                                            <circle id="Oval" cx="3.5" cy="2" r="2"></circle>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <span class="menu-name">Virtual Sessions</span>
                    </a>
                </li>
                <li>
                    <a href="experience.php" class="homeico">
                        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42">
                            <g fill-rule="evenodd" stroke="#000" stroke-width="1.2" transform="translate(11 9)">
                                <path fill="none" d="M1.39835044,6.96565664 L8.97669139,1.36004704 C10.0626849,0.55675041 11.5516096,0.578316114 12.6138824,1.41272841 L19.6811201,6.96402359 C20.5137876,7.61808155 21,8.61827516 21,9.67710801 L21,20.55 C21,22.4553824 19.4553824,24 17.55,24 L3.45,24 C1.54461761,24 -6.54836376e-16,22.4553824 0,20.55 L0,9.73932462 C-1.33972442e-16,8.64535662 0.518842027,7.61621866 1.39835044,6.96565664 Z" />
                                <line x1="10.5" x2="10.5" y1="23" y2="17" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                        <span class="menu-name">Experience</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="homeico">
                        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42">
                            <g fill-rule="evenodd" stroke="#000" stroke-width="1.2" transform="translate(11 9)">
                                <path fill="none" d="M1.39835044,6.96565664 L8.97669139,1.36004704 C10.0626849,0.55675041 11.5516096,0.578316114 12.6138824,1.41272841 L19.6811201,6.96402359 C20.5137876,7.61808155 21,8.61827516 21,9.67710801 L21,20.55 C21,22.4553824 19.4553824,24 17.55,24 L3.45,24 C1.54461761,24 -6.54836376e-16,22.4553824 0,20.55 L0,9.73932462 C-1.33972442e-16,8.64535662 0.518842027,7.61621866 1.39835044,6.96565664 Z" />
                                <line x1="10.5" x2="10.5" y1="23" y2="17" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                        <span class="menu-name">Learning Package</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="homeico">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                <g fill="none" fill-rule="evenodd" transform="translate(10 6)">
                                  <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" d="M6.5,16 L6.5,12.962963 C10.0898509,12.962963 13,10.0611049 13,6.48148148 C13,2.9018581 10.0898509,0 6.5,0 C2.91014913,0 0,2.9018581 0,6.48148148"></path>
                                  <circle cx="6.5" cy="19" r="1" fill="#fff"></circle>
                                </g>
                            </svg>
                        <span class="menu-name">Quiz</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="homeico">
                        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42">
                            <g fill-rule="evenodd" stroke="#000" stroke-width="1.2" transform="translate(11 9)">
                                <path fill="none" d="M1.39835044,6.96565664 L8.97669139,1.36004704 C10.0626849,0.55675041 11.5516096,0.578316114 12.6138824,1.41272841 L19.6811201,6.96402359 C20.5137876,7.61808155 21,8.61827516 21,9.67710801 L21,20.55 C21,22.4553824 19.4553824,24 17.55,24 L3.45,24 C1.54461761,24 -6.54836376e-16,22.4553824 0,20.55 L0,9.73932462 C-1.33972442e-16,8.64535662 0.518842027,7.61621866 1.39835044,6.96565664 Z" />
                                <line x1="10.5" x2="10.5" y1="23" y2="17" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                        <span class="menu-name">Test Prep</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="homeico">
                        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42">
                            <g fill="none" fill-rule="evenodd" transform="translate(8 10)">
                                <rect width="17.388" height="17.388" stroke="#fff" stroke-width="1.2" rx="4.347"></rect>
                                <path fill="#fff" d="M10.1015631,6.67306715 L12.402443,10.7287288 C12.4972156,10.8957802 12.4386219,11.1080305 12.2715705,11.2028031 C12.2192497,11.232486 12.160124,11.2480897 12.0999696,11.2480897 L7.49820968,11.2480897 C7.30614714,11.2480897 7.15044968,11.0923922 7.15044968,10.9003297 C7.15044968,10.8401753 7.16605334,10.7810496 7.19573627,10.7287288 L9.49661624,6.67306715 C9.59138878,6.5060157 9.80363906,6.44742206 9.97069051,6.5421946 C10.0253356,6.57319612 10.0705615,6.6184221 10.1015631,6.67306715 Z" transform="rotate(90 9.8 8.694)"></path>
                                <line x1="1.05" x2="25.2" y1="21.446" y2="21.446" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2"></line>
                                <line x1="19.95" x2="25.2" y1="16.8" y2="16.8" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2"></line>
                            </g>
                        </svg>
                        <span class="menu-name">Practically Live</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="homeico">
                        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 101 101">
                            <g fill="none" fill-rule="evenodd" stroke="#fff" stroke-width="1.2" transform="translate(11 9)">
                            <path fill="#fff" d="M98.11,52.09l-17.4-9.67a3.06,3.06,0,0,0-1.88-.06c-9.9,5-25.76,12.85-29.08,14.2-3.4-1.39-19.17-9.21-29-14.17a1.51,1.51,0,0,0-1.44,0L2.86,52.11a1.5,1.5,0,0,0,.09,2.63c6.75,3.4,12,6,16.05,8V77.57a1.5,1.5,0,0,0,.78,1.32L48,94.39a1.46,1.46,0,0,0,2,1,1.48,1.48,0,0,0,1.88-1L80.22,78.89A1.5,1.5,0,0,0,81,77.58V63.5a1.49,1.49,0,0,0,0-.24c4.21-2.07,9.76-4.82,17.08-8.51a1.5,1.5,0,0,0,.05-2.65Zm-78-6.65c15.71,7.91,23.06,11.44,26.57,13L33.4,66.27c-3-1.18-16.73-8-26.65-13ZM22,64.22c10.62,5.17,11.29,5.18,11.58,5.18a1.5,1.5,0,0,0,.76-.21l13.65-8V90.94L22,76.68ZM78,76.69,51,91.5v-31l15.69,8.71a1.51,1.51,0,0,0,.73.19c.29,0,.91,0,10.58-4.69ZM67.58,66.28l-14.38-8c3.66-1.66,11.11-5.25,26.49-13l14.48,8C84.24,58.32,70.49,65.12,67.58,66.28Z"/>
                            <path fill="#fff" d="M48.94,45.06a1.5,1.5,0,0,0,2.12,0l7-7a1.5,1.5,0,0,0-2.12-2.12L52,39.88V9.5a1.5,1.5,0,0,0-3,0V40.88l-4.94-4.94a1.5,1.5,0,0,0-2.12,2.12Z"/>
                            <path fill="#fff" d="M26.94,37.06a1.5,1.5,0,0,0,2.12,0l5.58-5.58a1.5,1.5,0,0,0-2.12-2.12L30,31.88V8.5a1.5,1.5,0,0,0-3,0V32.88l-3.52-3.52a1.5,1.5,0,0,0-2.12,2.12Z"/>
                            <path fill="#fff" d="M70.94,36.06a1.5,1.5,0,0,0,2.12,0l5.58-5.58a1.5,1.5,0,0,0-2.12-2.12L74,30.88V7.5a1.5,1.5,0,0,0-3,0V31.88l-3.52-3.52a1.5,1.5,0,0,0-2.12,2.12Z"/>
                            <line x1="10.5" x2="10.5" y1="23" y2="17" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                        <span class="menu-name">Packages</span>
                    </a>
                </li>
            </ul>



            <ul class="list desktop close hide-display" style="float: right;">
                <li>
                    <a href="#" class="homeico">
                        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42">
                            <g fill-rule="evenodd" stroke="#000" stroke-width="1.2" transform="translate(11 9)">
                                <path fill="none" d="M1.39835044,6.96565664 L8.97669139,1.36004704 C10.0626849,0.55675041 11.5516096,0.578316114 12.6138824,1.41272841 L19.6811201,6.96402359 C20.5137876,7.61808155 21,8.61827516 21,9.67710801 L21,20.55 C21,22.4553824 19.4553824,24 17.55,24 L3.45,24 C1.54461761,24 -6.54836376e-16,22.4553824 0,20.55 L0,9.73932462 C-1.33972442e-16,8.64535662 0.518842027,7.61621866 1.39835044,6.96565664 Z" />
                                <line x1="10.5" x2="10.5" y1="23" y2="17" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="homeico">
                        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42">
                            <g fill-rule="evenodd" stroke="#000" stroke-width="1.2" transform="translate(11 9)">
                                <path fill="none" d="M1.39835044,6.96565664 L8.97669139,1.36004704 C10.0626849,0.55675041 11.5516096,0.578316114 12.6138824,1.41272841 L19.6811201,6.96402359 C20.5137876,7.61808155 21,8.61827516 21,9.67710801 L21,20.55 C21,22.4553824 19.4553824,24 17.55,24 L3.45,24 C1.54461761,24 -6.54836376e-16,22.4553824 0,20.55 L0,9.73932462 C-1.33972442e-16,8.64535662 0.518842027,7.61621866 1.39835044,6.96565664 Z" />
                                <line x1="10.5" x2="10.5" y1="23" y2="17" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="homeico">
                        <svg width="42" height="42" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <!-- Generator: Sketch 64 (93537) - https://sketch.com -->
                            <title>virtual session icon</title>
                            <desc>Created with Sketch.</desc>
                            <g id="virtual-session-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(3.000000, 6.000000)">
                                    <g id="Group-7">
                                        <path d="M24.48,2.28 L24.48,10.6384528 M19.1056613,17.28 L0.72,17.28 L0.72,2.28" id="Shape" stroke="#FFFFFF" stroke-width="1.44" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <polygon id="Rectangle-Copy-11" stroke="#FFFFFF" stroke-width="1.44" stroke-linecap="round" stroke-linejoin="round" points="0 0 5.82263548 0 25.2 0 25.2 2.16 0 2.16"></polygon>
                                        <path d="M13.4278757,7.05248058 L16.1889316,11.9192746 C16.3026587,12.1197363 16.2323463,12.3744366 16.0318846,12.4881637 C15.9690996,12.5237832 15.8981487,12.5425076 15.8259635,12.5425076 L10.3038516,12.5425076 C10.0733766,12.5425076 9.88653962,12.3556706 9.88653962,12.1251956 C9.88653962,12.0530104 9.90526401,11.9820595 9.94088352,11.9192746 L12.7019395,7.05248058 C12.8156665,6.85201884 13.0703669,6.78170647 13.2708286,6.89543352 C13.3364027,6.93263535 13.3906738,6.98690652 13.4278757,7.05248058 Z" id="Triangle" fill="#FFFFFF" transform="translate(13.064908, 9.477600) rotate(-270.000000) translate(-13.064908, -9.477600) "></path>
                                        <line x1="12.24" y1="17.784" x2="12.24" y2="19.944" id="Line-5-Copy-2" stroke="#FFFFFF" stroke-width="1.44" stroke-linecap="round" stroke-linejoin="round"></line>
                                    </g>
                                    <g id="Group-6" transform="translate(20.000000, 12.000000)" fill="#FFFFFF">
                                        <g id="Group-5">
                                            <path d="M5.60328219,3.3 C6.45152779,4.07421433 7,5.30518089 7,6.69143118 C7,9.03457693 0,9.03457693 0,6.69143118 C0,5.30518089 0.548472207,4.07421433 1.39671781,3.3 C1.84053841,3.99078478 2.61678272,4.44879049 3.5,4.44879049 C4.32842712,4.44879049 5.0627417,4.04584676 5.51764502,3.42525802 Z" id="Combined-Shape"></path>
                                            <circle id="Oval" cx="3.5" cy="2" r="2"></circle>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="homeico">
                        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42">
                            <g fill-rule="evenodd" stroke="#000" stroke-width="1.2" transform="translate(11 9)">
                                <path fill="none" d="M1.39835044,6.96565664 L8.97669139,1.36004704 C10.0626849,0.55675041 11.5516096,0.578316114 12.6138824,1.41272841 L19.6811201,6.96402359 C20.5137876,7.61808155 21,8.61827516 21,9.67710801 L21,20.55 C21,22.4553824 19.4553824,24 17.55,24 L3.45,24 C1.54461761,24 -6.54836376e-16,22.4553824 0,20.55 L0,9.73932462 C-1.33972442e-16,8.64535662 0.518842027,7.61621866 1.39835044,6.96565664 Z" />
                                <line x1="10.5" x2="10.5" y1="23" y2="17" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="homeico">
                        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42">
                            <g fill-rule="evenodd" stroke="#000" stroke-width="1.2" transform="translate(11 9)">
                                <path fill="none" d="M1.39835044,6.96565664 L8.97669139,1.36004704 C10.0626849,0.55675041 11.5516096,0.578316114 12.6138824,1.41272841 L19.6811201,6.96402359 C20.5137876,7.61808155 21,8.61827516 21,9.67710801 L21,20.55 C21,22.4553824 19.4553824,24 17.55,24 L3.45,24 C1.54461761,24 -6.54836376e-16,22.4553824 0,20.55 L0,9.73932462 C-1.33972442e-16,8.64535662 0.518842027,7.61621866 1.39835044,6.96565664 Z" />
                                <line x1="10.5" x2="10.5" y1="23" y2="17" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="homeico">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                <g fill="none" fill-rule="evenodd" transform="translate(10 6)">
                                  <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" d="M6.5,16 L6.5,12.962963 C10.0898509,12.962963 13,10.0611049 13,6.48148148 C13,2.9018581 10.0898509,0 6.5,0 C2.91014913,0 0,2.9018581 0,6.48148148"></path>
                                  <circle cx="6.5" cy="19" r="1" fill="#fff"></circle>
                                </g>
                            </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="homeico">
                        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42">
                            <g fill-rule="evenodd" stroke="#000" stroke-width="1.2" transform="translate(11 9)">
                                <path fill="none" d="M1.39835044,6.96565664 L8.97669139,1.36004704 C10.0626849,0.55675041 11.5516096,0.578316114 12.6138824,1.41272841 L19.6811201,6.96402359 C20.5137876,7.61808155 21,8.61827516 21,9.67710801 L21,20.55 C21,22.4553824 19.4553824,24 17.55,24 L3.45,24 C1.54461761,24 -6.54836376e-16,22.4553824 0,20.55 L0,9.73932462 C-1.33972442e-16,8.64535662 0.518842027,7.61621866 1.39835044,6.96565664 Z" />
                                <line x1="10.5" x2="10.5" y1="23" y2="17" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="homeico">
                        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42">
                            <g fill="none" fill-rule="evenodd" transform="translate(8 10)">
                                <rect width="17.388" height="17.388" stroke="#fff" stroke-width="1.2" rx="4.347"></rect>
                                <path fill="#fff" d="M10.1015631,6.67306715 L12.402443,10.7287288 C12.4972156,10.8957802 12.4386219,11.1080305 12.2715705,11.2028031 C12.2192497,11.232486 12.160124,11.2480897 12.0999696,11.2480897 L7.49820968,11.2480897 C7.30614714,11.2480897 7.15044968,11.0923922 7.15044968,10.9003297 C7.15044968,10.8401753 7.16605334,10.7810496 7.19573627,10.7287288 L9.49661624,6.67306715 C9.59138878,6.5060157 9.80363906,6.44742206 9.97069051,6.5421946 C10.0253356,6.57319612 10.0705615,6.6184221 10.1015631,6.67306715 Z" transform="rotate(90 9.8 8.694)"></path>
                                <line x1="1.05" x2="25.2" y1="21.446" y2="21.446" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2"></line>
                                <line x1="19.95" x2="25.2" y1="16.8" y2="16.8" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2"></line>
                            </g>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="homeico">
                        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 101 101">
                            <g fill="none" fill-rule="evenodd" stroke="#fff" stroke-width="1.2" transform="translate(11 9)">
                            <path fill="#fff" d="M98.11,52.09l-17.4-9.67a3.06,3.06,0,0,0-1.88-.06c-9.9,5-25.76,12.85-29.08,14.2-3.4-1.39-19.17-9.21-29-14.17a1.51,1.51,0,0,0-1.44,0L2.86,52.11a1.5,1.5,0,0,0,.09,2.63c6.75,3.4,12,6,16.05,8V77.57a1.5,1.5,0,0,0,.78,1.32L48,94.39a1.46,1.46,0,0,0,2,1,1.48,1.48,0,0,0,1.88-1L80.22,78.89A1.5,1.5,0,0,0,81,77.58V63.5a1.49,1.49,0,0,0,0-.24c4.21-2.07,9.76-4.82,17.08-8.51a1.5,1.5,0,0,0,.05-2.65Zm-78-6.65c15.71,7.91,23.06,11.44,26.57,13L33.4,66.27c-3-1.18-16.73-8-26.65-13ZM22,64.22c10.62,5.17,11.29,5.18,11.58,5.18a1.5,1.5,0,0,0,.76-.21l13.65-8V90.94L22,76.68ZM78,76.69,51,91.5v-31l15.69,8.71a1.51,1.51,0,0,0,.73.19c.29,0,.91,0,10.58-4.69ZM67.58,66.28l-14.38-8c3.66-1.66,11.11-5.25,26.49-13l14.48,8C84.24,58.32,70.49,65.12,67.58,66.28Z"/>
                            <path fill="#fff" d="M48.94,45.06a1.5,1.5,0,0,0,2.12,0l7-7a1.5,1.5,0,0,0-2.12-2.12L52,39.88V9.5a1.5,1.5,0,0,0-3,0V40.88l-4.94-4.94a1.5,1.5,0,0,0-2.12,2.12Z"/>
                            <path fill="#fff" d="M26.94,37.06a1.5,1.5,0,0,0,2.12,0l5.58-5.58a1.5,1.5,0,0,0-2.12-2.12L30,31.88V8.5a1.5,1.5,0,0,0-3,0V32.88l-3.52-3.52a1.5,1.5,0,0,0-2.12,2.12Z"/>
                            <path fill="#fff" d="M70.94,36.06a1.5,1.5,0,0,0,2.12,0l5.58-5.58a1.5,1.5,0,0,0-2.12-2.12L74,30.88V7.5a1.5,1.5,0,0,0-3,0V31.88l-3.52-3.52a1.5,1.5,0,0,0-2.12,2.12Z"/>
                            <line x1="10.5" x2="10.5" y1="23" y2="17" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                    </a>
                </li>
            </ul>
                <ul class="list open-panel">
                    <a style="color: #fff;font-size: 16px;" href="#" class="ham-menu-click">
                        <span class="my-svg"><i class="fa fa-chevron-right"></i></span>
                    </a>
                </ul>
                <ul class="list close-panel hide-display">
                    <a style="color: #fff;font-size: 16px;" href="javascript:void(0)" class="menu-back-link">
                        <span class="my-svg">
                    <i class="fa fa-chevron-left"></i></span> Collapse </a> </ul>
            </div>
            <div class="user">
                <div class="user--info">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <div class="img-wrap">
                                <img src="https://stage.corsalite.com/fileserverapp/files/shared/user/7/73931/73931.png?t=20200828113321" alt="" title="">
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="user--name">
                                <p class="name">Chaithanya</p>
                                <p class="mail-id">Chaitu@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="user--profile">
                    <ul class="list">
                        <li>
                            <a href="javascript:void(0)" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                    <g fill="none" fill-rule="evenodd" stroke="#fff" stroke-width="1.1" transform="translate(7 7)">
                                      <path  d="M18,18.1 C18,13.1294373 13.9705627,9.1 9,9.1 C4.02943725,9.1 0,13.1294373 0,18.1"/>
                                      <circle cx="9" cy="4.5" r="4.5" />
                                    </g>
                                </svg>
                                <a href="//stgteach.practically.com/teacherwebsite/teacherapp/profile">
                                <span class="menu-name">My Profile</span>
                                </a>
                            </a>
                        </li>
                        <li>
                            <a href="//stgteach.practically.com/teacherwebsite/teacherapp/appSettings">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                    <path style="fill: white;" d="M9.50000207,4.68590787 C6.84123482,4.68590787 4.68587811,6.84125031 4.68587811,9.49999996 C4.68587811,12.1587496 6.84123482,14.314092 9.50000207,14.314092 C12.1587693,14.314092 14.314126,12.1587496 14.314126,9.49999996 C14.3102021,6.84287734 12.1571423,4.68983176 9.50000207,4.68590787 L9.50000207,4.68590787 Z M9.50000207,13.3664735 C7.36621447,13.3664735 5.63631561,11.6369395 5.63587863,9.50316612 C5.63544182,7.36939269 7.36463229,5.63915087 9.49841971,5.63827635 C11.6322071,5.6374025 13.3628147,7.36622689 13.3641262,9.49999996 C13.361509,11.6329977 11.6330139,13.3614814 9.50000207,13.3640985 L9.50000207,13.3664735 Z M18.5938751,7.96576045 C18.3356796,7.70591766 17.9840585,7.56047925 17.6177503,7.56201321 C17.4257963,7.55904648 17.2590778,7.42916203 17.2092504,7.24376538 C17.0475775,6.68868238 16.8262008,6.15276309 16.5490005,5.64540131 C16.456339,5.47592599 16.4873632,5.26554425 16.6250005,5.13002984 C17.1607078,4.59323995 17.1607078,3.72408301 16.6250005,3.18729312 L15.8270007,2.38929858 C15.2893932,1.8533215 14.4194836,1.8533215 13.8818761,2.38929858 C13.7438696,2.52375863 13.5332501,2.54996456 13.3665012,2.45342314 C12.8592039,2.175473 12.3232852,1.95330313 11.7681266,1.79080267 C11.5810451,1.74050027 11.4507241,1.57127854 11.4498766,1.37755549 C11.4505189,1.01078875 11.3046161,0.65896294 11.0446026,0.400289138 C10.7845891,0.141615337 10.4320129,-0.00246944875 10.0652519,3.20356462e-05 L8.93475219,3.20356462e-05 C8.56963369,0.000693330342 8.21975435,0.146501191 7.96224535,0.405345035 C7.70473634,0.664188879 7.56074074,1.01481604 7.56200249,1.37993048 C7.55983863,1.57216506 7.42962009,1.73931013 7.24375256,1.78842768 C6.6885939,1.95092815 6.15267523,2.17309801 5.6453779,2.45104815 C5.47738212,2.54735707 5.26583237,2.52018572 5.12762802,2.38454861 C4.59083457,1.84884484 3.72167188,1.84884484 3.18487844,2.38454861 L2.37500361,3.18729312 C2.11699394,3.44519375 1.97203658,3.79504649 1.97203658,4.15984897 C1.97203658,4.52465144 2.11699394,4.87450419 2.37500361,5.13240482 C2.50946455,5.27041046 2.53567066,5.48102854 2.4391286,5.6477763 C2.16192837,6.15513807 1.94055163,6.69105736 1.77887874,7.24614037 C1.72881132,7.43237582 1.56084366,7.56247709 1.36800383,7.56438819 C0.613176543,7.56829477 0.00260140385,8.17992589 2.05827089e-06,8.93475382 L2.05827089e-06,10.0652461 C-0.000630087012,10.4305554 0.14437144,10.7810505 0.402909017,11.0391406 C0.661446593,11.2972308 1.01219373,11.4416263 1.37750383,11.4403617 C1.56945784,11.4433284 1.7361763,11.5732129 1.78600374,11.7586095 C1.94778737,12.3121353 2.16916679,12.8464684 2.4462536,13.3522236 C2.54134131,13.5212476 2.51221279,13.7329134 2.37500361,13.8699701 C1.8392963,14.40676 1.8392963,15.2759169 2.37500361,15.8127068 L3.17300344,16.6107013 C3.70979688,17.1464051 4.57895958,17.1464051 5.11575302,16.6107013 C5.25375957,16.4762413 5.46437904,16.4500354 5.63112791,16.5465768 C6.13924457,16.8245501 6.67595261,17.046717 7.23187756,17.2091972 C7.41811425,17.2592643 7.54821637,17.4272309 7.55012749,17.6200694 C7.54885038,17.9872473 7.69447306,18.3396861 7.95455603,18.5988751 C8.214639,18.8580641 8.56757846,19.0024739 8.93475219,18.9999679 L10.0652519,18.9999679 C10.8237847,18.9986249 11.4380028,18.3833483 11.4380016,17.6248194 C11.4409684,17.4328667 11.5708537,17.2661493 11.7562516,17.2163222 C12.3121765,17.053842 12.8488846,16.831675 13.3570012,16.5537017 C13.5237501,16.4571603 13.7343696,16.4833662 13.8723761,16.6178263 C14.4091696,17.1535301 15.2783323,17.1535301 15.8151257,16.6178263 L16.6250005,15.8127068 C16.8830102,15.5548062 17.0279675,15.2049534 17.0279675,14.8401509 C17.0279675,14.4753485 16.8830102,14.1254957 16.6250005,13.8675951 C16.4905396,13.7295895 16.4643335,13.5189714 16.5608755,13.3522236 C16.8379623,12.8464684 17.0593418,12.3121353 17.2211254,11.7586095 C17.2711928,11.5723741 17.4391605,11.4422728 17.6320003,11.4403617 C18.3877512,11.436447 18.9987049,10.823376 19.0000021,10.0676211 L19.0000021,8.93712881 C19.0000021,8.57207215 18.8536425,8.22225242 18.5938751,7.96576045 Z M18.0500002,10.0676211 C18.0493721,10.180371 18.0039787,10.2882533 17.9238066,10.3675341 C17.8436344,10.446815 17.735251,10.4909998 17.6225003,10.4903682 C17.0075264,10.4909535 16.4679795,10.9004631 16.3020006,11.4926113 C16.1594647,11.9801812 15.9643609,12.4508162 15.7201257,12.8962267 C15.4210247,13.4359907 15.5181271,14.1089058 15.9576257,14.5420905 C16.1218437,14.7077954 16.1218437,14.9748815 15.9576257,15.1405864 L15.1596258,15.9385809 C14.9939198,16.1027979 14.726832,16.1027979 14.561126,15.9385809 C14.1287104,15.4994798 13.4566639,15.4023639 12.9176263,15.7010826 C12.4698303,15.9461536 11.9968264,16.1420428 11.5068766,16.2853286 C10.9138761,16.4515443 10.5041475,16.9923435 10.5046268,17.6081945 C10.5093193,17.726313 10.4646181,17.8410518 10.3812549,17.924865 C10.2978917,18.0086783 10.1833948,18.0539971 10.0652519,18.0499415 L8.93475219,18.0499415 C8.70089021,18.048635 8.51199863,17.8586835 8.51200228,17.6248194 C8.51222477,17.0095776 8.10238394,16.4696013 7.5097525,16.3043284 C7.01980268,16.1610427 6.54679882,15.9651535 6.0990028,15.7200824 C5.8917039,15.60562 5.6589273,15.5451802 5.42212795,15.5443336 C5.06006716,15.5442861 4.71296644,15.6887679 4.45787816,15.9457059 C4.29217216,16.1099229 4.02508429,16.1099229 3.85937829,15.9457059 L3.06137846,15.1477113 C2.89558509,14.9817301 2.89558509,14.7128217 3.06137846,14.5468405 C3.49653229,14.1115434 3.58875032,13.4398122 3.28700342,12.9033517 C3.04276822,12.4579412 2.84766443,11.9873061 2.70512854,11.4997363 C2.5386753,10.9058894 1.99661467,10.4959466 1.37987883,10.4974931 C1.26486239,10.4994613 1.15401042,10.4544747 1.07289399,10.3729106 C0.991777573,10.2913466 0.947402067,10.1802492 0.949895627,10.0652461 L0.949895627,8.93712881 C0.950632056,8.82437887 0.996025404,8.71649659 1.07619757,8.63721575 C1.15636974,8.55793491 1.26475317,8.51375005 1.37750383,8.5143817 C1.9924777,8.51379635 2.53202464,8.10428681 2.69800354,7.51213855 C2.84048183,7.02303022 3.0355806,6.55081469 3.27987842,6.10377318 C3.57897946,5.56400921 3.48187706,4.89109407 3.04237847,4.45790943 C2.87816041,4.29220453 2.87816041,4.02511843 3.04237847,3.85941352 L3.8403783,3.06141898 C3.92018585,2.98106961 4.02875415,2.93588393 4.14200323,2.93588393 C4.2552523,2.93588393 4.36382061,2.98106961 4.44362816,3.06141898 C4.87892813,3.49656992 5.55066372,3.58878735 6.08712781,3.28704244 C6.5341884,3.04277996 7.00640332,2.84768403 7.4955025,2.70517142 C8.08935333,2.53871928 8.49929883,1.99666224 8.49775228,1.37993048 C8.49641456,1.26427139 8.54226209,1.15306043 8.62472088,1.07194661 C8.70717967,0.990832795 8.81912995,0.946819764 8.93475219,0.949891521 L10.0652519,0.949891521 C10.1784177,0.950683549 10.2866637,0.996402935 10.3660137,1.07708975 C10.4453637,1.15777656 10.489268,1.26677087 10.4880019,1.37993048 C10.4885872,1.99490028 10.8980994,2.53444364 11.4902516,2.70042145 C11.9793508,2.84293406 12.4515657,3.03802999 12.8986263,3.28229247 C13.4382392,3.5822333 14.1116998,3.48505349 14.544501,3.04479409 C14.710207,2.88057712 14.9772948,2.88057712 15.1430008,3.04479409 L15.9410007,3.84278864 C16.0213506,3.92259567 16.0665365,4.03116325 16.0665365,4.14441158 C16.0665365,4.2576599 16.0213506,4.36622748 15.9410007,4.44603451 C15.5058468,4.8813316 15.4136288,5.55306274 15.7153757,6.08952328 C15.9596735,6.53656479 16.1547723,7.00878032 16.2972506,7.49788865 C16.4637038,8.09173554 17.0057645,8.50167833 17.6225003,8.50013179 C17.7379557,8.49876857 17.8489447,8.54468822 17.9296875,8.62722485 C18.0104304,8.70976149 18.0539003,8.82173203 18.0500002,8.93712881 L18.0500002,10.0676211 Z" transform="translate(7 7)"/>
                                </svg>
                                <span class="menu-name">App Settings</span>
                            </a>
                        </li>
                        <li>
                          <!--  <a href="javascript:void(0)" class="" data-toggle="modal" data-target="#feedBackModel">-->
                            <a href="//stgteach.practically.com/teacherwebsite/teacherapp/feedBack" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                    <path fill="none" stroke="#fff" d="M12.7417092,6.28390043 C12.4080279,6.28573329 12.1107363,6.07350409 12.0040773,5.75732304 L10.2852892,0.527195415 C10.1773742,0.211861541 9.88094559,0 9.5476573,0 C9.21436901,0 8.91794036,0.211861541 8.81002542,0.527195415 L7.09123728,5.75732304 C6.98457832,6.07350409 6.68728674,6.28573329 6.3536054,6.28390043 L0.773720273,6.28390043 C0.442186373,6.27646097 0.144436627,6.48575714 0.0391814562,6.80022721 C-0.0660737147,7.11469727 0.0456929712,7.46106125 0.314906189,7.65469574 L4.84304827,10.9080405 C5.11059015,11.0980423 5.22354551,11.439911 5.12186605,11.7519055 L3.39601923,17.0053268 C3.32184783,17.2396696 3.36494016,17.4953855 3.51181557,17.6924783 C3.65869098,17.8895711 3.89141362,18.0039727 4.13718044,18 C4.30107005,17.9991306 4.46048694,17.9463624 4.59246519,17.8491918 L9.08884321,14.6191406 C9.36325099,14.4229224 9.73206361,14.4229224 10.0064714,14.6191406 L14.5028494,17.8491918 C14.6348277,17.9463624 14.7942445,17.9991306 14.9581341,18 C15.203901,18.0039727 15.4366236,17.8895711 15.583499,17.6924783 C15.7303744,17.4953855 15.7734668,17.2396696 15.6992954,17.0053268 L13.9734485,11.7519055 C13.8717691,11.439911 13.9847244,11.0980423 14.2522663,10.9080405 L18.7804084,7.65469574 C19.0496216,7.46106125 19.1613883,7.11469727 19.0561331,6.80022721 C18.950878,6.48575714 18.6531282,6.27646097 18.3215943,6.28390043 L12.7417092,6.28390043 Z" transform="translate(6 7)"/>
                                </svg>
                                <span class="menu-name">App Feedback</span>
                            </a>
                        </li>
                        <li>
                            <a href="//stgteach.practically.com/teacherwebsite/teacherapp/termsHelpPrivacy/help" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                    <g stroke="#fff" stroke-width=".3" transform="translate(7 7)">
                                        <path style="fill: white;" d="M9,0.218181818 C4.17272727,0.218181818 0.218181818,4.14545455 0.218181818,9 C0.218181818,13.8545455 4.17272727,17.7818182 9,17.7818182 C13.8272727,17.7818182 17.7818182,13.8272727 17.7818182,9 C17.7818182,4.17272727 13.8272727,0.218181818 9,0.218181818 Z M9,17.1 C4.52727273,17.1 0.9,13.4727273 0.9,9 C0.9,4.52727273 4.52727273,0.9 9,0.9 C13.4727273,0.9 17.1,4.52727273 17.1,9 C17.1,13.4727273 13.4727273,17.1 9,17.1 Z"/>
                                        <path style="fill: white;" d="M9 7.17272727C8.80909091 7.17272727 8.64545455 7.33636364 8.64545455 7.52727273L8.64545455 12.8181818C8.64545455 13.0090909 8.80909091 13.1727273 9 13.1727273 9.19090909 13.1727273 9.35454545 13.0090909 9.35454545 12.8181818L9.35454545 7.5C9.35454545 7.30909091 9.19090909 7.17272727 9 7.17272727zM9 5.01818182C8.67272727 5.01818182 8.4 5.29090909 8.4 5.61818182L8.4 5.61818182C8.4 5.94545455 8.67272727 6.21818182 9 6.21818182 9.32727273 6.21818182 9.6 5.94545455 9.6 5.61818182L9.6 5.61818182C9.6 5.26363636 9.32727273 5.01818182 9 5.01818182z"/>
                                    </g>
                                </svg>
                                <span class="menu-name">Help</span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
                <hr>
                <div class="privacy--wrap">
                    <ul class="list">
                        <li>
                            <a href="//stgteach.practically.com/teacherwebsite/teacherapp/termsHelpPrivacy/privacy" class="">
                                <span class="menu-name">Privacy</span>
                            </a>
                        </li>
                        <li>
                            <a href="//stgteach.practically.com/teacherwebsite/teacherapp/termsHelpPrivacy/terms" class="">
                                <span class="menu-name">Terms of Use</span>
                            </a>
                        </li>
                         <li>
                            <a href="//stgteach.practically.com/teacherwebsite/teacherapp/termsHelpPrivacy/about" class="">
                                <span class="menu-name">About Us</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <hr>
                                <div class="singout--wrap">
                    <a href="javascript:void(0)" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                            <path style="fill: white;" stroke="#fff" stroke-width=".5" d="M1.15348101,-2.87769808e-13 C0.521103311,-2.87769808e-13 -3.53495011e-13,0.524669122 -3.53495011e-13,1.16132912 L-3.53495011e-13,16.6452001 C-3.53495011e-13,17.2818582 0.521103311,17.8065292 1.15348101,17.8065292 L3.46044304,17.8065292 C3.59910397,17.8084627 3.72807856,17.7351169 3.79798072,17.614538 C3.86788288,17.4939591 3.86788288,17.3448281 3.79798072,17.2242493 C3.72807856,17.1036704 3.59910397,17.0303246 3.46044304,17.0322969 L1.15348101,17.0322969 C0.93382074,17.0322969 0.768987342,16.8663485 0.768987342,16.6452001 L0.768987342,1.16132912 C0.768987342,0.94018267 0.93382074,0.774232347 1.15348101,0.774232347 L3.46044304,0.774232347 C3.59910397,0.776204659 3.72807856,0.702858829 3.79798072,0.582279951 C3.86788288,0.461701073 3.86788288,0.312570073 3.79798072,0.191991195 C3.72807856,0.0714123176 3.59910397,-0.00193351269 3.46044304,-2.87769808e-13 L1.15348101,-2.87769808e-13 Z M11.1262856,4.6391517 C10.9778775,4.64695397 10.84722,4.74015309 10.7907012,4.87852694 C10.7341824,5.01690079 10.7619212,5.17567579 10.8619462,5.28632912 L13.7456487,8.51616783 L4.22943038,8.51616783 C4.21742156,8.51560054 4.20539292,8.51560054 4.1933841,8.51616783 C4.05599814,8.52262367 3.93247261,8.60238941 3.86934925,8.72541106 C3.80622589,8.84843271 3.8130973,8.99601515 3.88737447,9.11255254 C3.96165165,9.22908993 4.09204699,9.29687255 4.22943038,9.29036138 L13.7456487,9.29036138 L10.8619462,12.5141517 C10.7219853,12.6746074 10.7372211,12.9187899 10.8960264,13.0603507 C11.0548318,13.2019116 11.2974322,13.1875672 11.4386867,13.0282646 L14.8991297,9.15729686 C15.0284679,9.01066118 15.0284679,8.78981965 14.8991297,8.64318396 L11.4386867,4.77221622 C11.3606616,4.68151843 11.2452746,4.63237033 11.1262856,4.6391517 Z" transform="translate(9 7)"/>
                        </svg>
                        
                        <a id="logoutbtn" href="//stgteach.practically.com/teacherwebsite/teacherapp/logout">
                            <span class="singout--lbl">Sign Out</span>
                        </a>
                    </a>
                </div>
            </div>
        </div>
    </header>
<style>
 
/* Small devices (landscape phones, 576px and up) */
@media (max-width: 576px) {  
 .close-sidebar{
     margin-top:25px;
 }
}
 
 //Medium devices (tablets, 768px and up) The navbar toggle appears at this breakpoint 
@media (min-width: 768px) {  
 .close-sidebar{
     margin-top:50px;
 }
}
@media (min-width: 768px) and (max-width: 1024px) {
  
 .close-sidebar{
     margin-top:50px;
 }
  
}


</style>
<script>
$(document).ready(function() {
    if ($(window).width() > 768) {
        $(".sidebar-wrapper").addClass('show')
        $(".sidebar-menu .list").removeClass("hide-display");
        $('.sidebar-menu .list.close').addClass('hide-display');
        $('.close-panel').removeClass('hide-display');
        $('.open-panel').addClass('hide-display');
        $('.view-wrapper').addClass('view-width');
    }

    if ($('.notify-count').text() === '0')
        $('.notify-count').css('display', 'none');

    $("header.header .open-panel .ham-menu-click").on("click", (function() {
        if ($(window).width() > 768) {
            $(".sidebar-menu .list").removeClass("hide-display");
            $('.sidebar-menu .list.close').addClass('hide-display');
            $('.close-panel').removeClass('hide-display');
            $('.open-panel').addClass('hide-display');
        }
    }));

    $(".menu-back-link").on("click", (function() {
        if ($(window).width() > 768) {
            $('.sidebar-menu .list').addClass('hide-display');
            $('.sidebar-menu .list.close').removeClass('hide-display');
            $('.close-panel').addClass('hide-display');
            $('.open-panel').removeClass('hide-display');
        }
    }));

    var url = window.location.href;
    $('.sidebar-wrapper a').each(function() {
        if ($(this).attr('href') === url.substr(6)) {
            $(this).closest('li').addClass('active');
        }

    })

    
})

</script>

<div class="view-wrapper" id="view-wrapper">
    <style>
.bg-white {
    background-color: #fff !important;
    font-size: 18px;
    text-align: center;
    border: 2px solid whitesmoke;
    border-radius: 15px;
}
.warningdiv{
    background-color : #fff;
}
.white-layer.white-layer-with-overlay{
        height:100% !important;
    }
    .user-detail-wrap {
        margin: inherit  !important;
    }

    .modal.fade .modal-bottom,
    .modal.fade .modal-left,
    .modal.fade .modal-right,
    .modal.fade .modal-top {
        position: fixed;
        z-index: 1055;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: 0;
        max-width: 100%
    }

    .modal.fade .modal-right {
        left: auto !important;
        transform: translate3d(100%, 0, 0);
        transition: transform .3s cubic-bezier(.25, .8, .25, 1)
    }

    .modal.fade.show .modal-bottom,
    .modal.fade.show .modal-left,
    .modal.fade.show .modal-right,
    .modal.fade.show .modal-top {
        transform: translate3d(0, 0, 0)
    }

    .w-xl {
        width: 415px !important;
        height: 100% !important;
        overflow: scroll !important;
    }

    .white-layer.white-layer-with-overlay .wrapper {
        padding: 0 !important;
    }

    .h-100 {
        height: 100% !important
    }

    .list-group.no-radius .list-group-item {
        border-radius: 0 !important
    }

    .btn-light {
        color: #212529;
        background-color: #f5f5f6;
        border-color: #f5f5f6
    }

    .btn-light:hover {
        color: #212529;
        background-color: #e1e1e4;
        border-color: #dadade
    }

    .modal-title {
        font-weight: 600;
        font-size: calc(15px + (20 - 15) * ((100vw - 320px) / (1600 - 320)));
        line-height: 27px;
        color: #262626;
        padding-top: 7px;
    }

    #modal-right .modal-header .close {
        color: #777777;
        padding-top: 7px !important;
        margin: inherit !important;

    }

    #modal-right .tabs-content .nav-tabs li {
        padding: unset;
    }

    .upcomingDiv ul li {
        background: #FCEBDB;
        border-radius: 10px !important;
        font-family: Open Sans !important;
        font-style: normal !important;
        font-weight: normal !important;
        font-size: 15px !important;
        line-height: 22px !important;
        color: #262626 !important;
        padding-left: 17px;
        padding-right: 20px;
        padding-bottom: 14px;
        padding-top: 17px;
    }

    .selected-list ul {
        margin-bottom: 11px !important;
    }

    .selected-list ul li small {
        font-family: Open Sans;
        font-style: normal;
        font-weight: 600;
        font-size: 12px;
        line-height: 22px;
        color: #262626;
        mix-blend-mode: normal;
        opacity: 0.5;
    }

    #modal-right {
        padding: 20px !important;
    }

    #modal-right .modal-dialog {
        background: #FFFFFF !important;
        box-shadow: -2px 0px 58px rgba(0, 0, 0, 0.0971099) !important;
        border-radius: 25px 0px 0px 25px !important;
    }

    @media (max-width: 768px) {
        .modal-content,
        .modal-footer,
        .modal-header {
            border-radius: 25px 0px 0px 25px !important;

        }

        .modal-backdrop {
            background-color: transparent;
        }

        .modal-content,
        .modal-footer,
        .modal-header {
            border: none
        }        
    }
    .redeem-wraper {
        margin-bottom: 50px;
    }
    ul.subject-list-ui-box li{
display: inline-block;
    }
    .bg-white{
        text-align: left;
    }
</style>
