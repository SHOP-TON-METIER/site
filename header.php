<?php 
session_start();
echo ('<header>
                <div class="left">
                    <a class="home" href="index.php"><img class="logo" src="medias/images/logo.png" alt=""></a>
                </div>

                <div class="right">
                    <div class="searchbar">
                        <label for="searchbar" class="search-icon">
                            <div class="icon">
                                <svg width="30" height="24" viewBox="0 0 30 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.7571 14.839C15.3114 17.2978 11.2992 17.2959 8.79546 14.8053C6.2917 12.3147 6.26846 8.30247 8.71417 5.84367C11.1599 3.38488 15.1721 3.38682 17.6758 5.8774C20.1796 8.36798 20.2028 12.3802 17.7571 14.839Z" stroke="#848C96" stroke-width="2" />
                                    <rect width="6.84832" height="1.35588" rx="0.677941" transform="matrix(0.692076 0.688438 -0.687611 0.691295 17.9675 14.1159)" fill="#848C96" />
                                </svg>
                            </div>
                        </label>
                        <input type="text" id="searchbar" placeholder="Rechercher">
                    </div>

                    <a href="panier.php" class="bag">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="36" height="36">
                                <rect width="36" height="36" fill="#09192C" />
                            </mask>
                            <g mask="url(#mask0)">
                                <path d="M3.20689 15.3636C3.53223 12.3136 6.10568 10 9.17304 10H26.827C29.8943 10 32.4678 12.3135 32.7931 15.3636L34.1798 28.3636C34.558 31.909 31.7792 35 28.2136 35H7.78638C4.22084 35 1.44204 31.909 1.82022 28.3636L3.20689 15.3636Z" stroke="#09192C" stroke-width="2" />
                                <path d="M11.6782 7.39459C11.8902 6.4759 12.2999 5.61446 12.8787 4.87023C15.4762 1.53057 20.5238 1.53058 23.1213 4.87023C23.7002 5.61446 24.1098 6.4759 24.3218 7.39458L26.3354 16.1199C26.4561 16.6432 26.0587 17.1428 25.5216 17.1428C25.1327 17.1428 24.7952 16.8744 24.7078 16.4955L22.7089 7.8338C22.4367 6.6544 21.7319 5.62007 20.7338 4.93536C19.0865 3.80529 16.9136 3.80529 15.2662 4.93536C14.2681 5.62007 13.5633 6.6544 13.2911 7.8338L11.2923 16.4955C11.2048 16.8744 10.8674 17.1428 10.4785 17.1428C9.94137 17.1428 9.54389 16.6432 9.66466 16.1199L11.6782 7.39459Z" fill="#09192C" />
                            </g>
                        </svg>
                    </a>
                
        </header>');