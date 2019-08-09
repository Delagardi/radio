<div class="header live">
    <div class="ui menu top-menu borderless">
        <div class="ui container">
            <div class="ui label red item">CHANNEL</div>
            <div class="ui dropdown icon item">
                <img class="ui avatar image" src="<?= url('images/header/hq_logo.svg') ?>">
                <div class="text">Radio 3 Shuttle</div>
                <i class="dropdown icon"></i>
            </div>
            <div class="right menu ">
                <div class="ui grid computer only">
                    <div class="item date">
                        <i class="ui clock icon"></i>
                        Saturday, 22 December 2018 - 10:30 PM UTC+12
                    </div>
                    <div class="item">
                        <? include APP_DIR . '/partials/dropdown_notification.php' ?>
                    </div>
                    <div class="ui button item">
                        <i class="ui sign in icon"></i>
                        Sign In
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="navigation">
        <div class="ui container">
            <div class="ui two column stackable grid status middle aligned">

                <div class="column sixteen wide mobile sixteen wide tablet eight wide computer logo">
                    <div class="ui grid">
                        <div class="column two wide mobile two wide tablet mobile only tablet only center aligned middle aligned">
                            <a class="launch icon item">
                                <i class="content icon"></i>
                            </a>
                        </div>
                        <div class="column twelve wide mobile twelve wide tablet twelve wide computer logo">
                            <img src="<?= url('images/header/site_logo.svg') ?>" alt="logo" class="logo">
                        </div>
                        <div class="column two wide mobile two wide tablet mobile only tablet only center aligned middle aligned">
                            <a class="launch icon item">
                                <i class="bell icon"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="column sixteen wide mobile sixteen wide tablet eight wide computer ">
                    <div class="ui grid">
                        
                        <div class="column sixteen wide computer only status-computer">
                            <div class="ui horizontal basic segments">
                                <div class="ui segment right aligned fitted basic live-status">
                                    <div class="items">
                                        <div class="item">
                                            <span class="ui label small blue playlist">Playlist</span>
                                            <span class="ui label small red live">Live</span>
                                            <span class="ui label small orange recorded">Recorded</span>
                                            <span class="ui label small purple syndicated">Syndicated</span>
                                        </div>
                                        <div class="item">
                                            <div class="ui label black time">14:00-15:30</div>
                                        </div>
                                    </div>
                                    <div class="group-logo">
                                        <img src="<?= url('images/header/group.png') ?>">
                                    </div>
                                </div>
                                <div class="ui segment basic compact fitted">
                                    <div class="ui segment basic fitted">
                                        <div class="ui buttons">
                                            <div class="ui tiny button">On Air</div>
                                            <div class="ui basic tiny button">Coming Up</div>
                                        </div>
                                    </div>
                                    <div class="song-info">
                                        <h5>Pure American Country Radio Show</h5>
                                        <div class="artist">Stanley Fisher</div>
                                    </div>
                                    <div class="offair">
                                        <span class="ui label black">Station currently off-air</span>
                                        <h5>No Broadcast Available</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="column sixteen wide mobile only tablet only ui items unstackable actions">
                            <div class="ui buttons fluid">
                                <div class="ui tiny button">On Air</div>
                                <div class="ui basic tiny button">Coming Up</div>
                            </div>
                        </div>

                        <div class="column sixteen wide mobile only tablet only ui items unstackable status-mobile">
                            <div class="item">
                                <div class="image">
                                    <img src="<?= url('images/header/group.png') ?>">
                                </div>
                                <div class="middle aligned content">
                                    <div class="ui grid">
                                        <div class="column fourteen wide mobile thirteen wide computer thirteen wide large screen">
                                            <div class="ui grid">
                                                <div class="column sixteen wide mobile nine wide large screen live-status">
                                                    <span class="ui label small blue playlist">Playlist</span>
                                                    <span class="ui label small red live">Live</span>
                                                    <span class="ui label small orange recorded">Recorded</span>
                                                    <span class="ui label small purple syndicated">Syndicated</span>
                                                    <span class="ui label black time">14:00-15:30</span>
                                                    <span class="ui label black offair">Station currently off-air</span>
                                                </div>
                                                <div class="sixteen wide column sixteen wide mobile song-info">
                                                    <h5>Pure American Country Radio Show</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column two wide screen center aligned middle aligned play-button">
                                            <button class="ui primary icon button play">
                                                <i class="play icon"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="column column sixteen wide computer only status-computer">
                    <div class="ui borderless inverted menu horizontal-nav">
                        <div class="item active">Home</div>
                        <div class="ui dropdown item" tabindex="0">World<i class="dropdown icon"></i><div class="menu" tabindex="-1"></div></div>
                        <div class="ui dropdown item" tabindex="0">Sports<i class="dropdown icon"></i><div class="menu" tabindex="-1"></div></div>
                        <div class="ui dropdown item" tabindex="0">Tech<i class="dropdown icon"></i><div class="menu" tabindex="-1"></div></div>
                        <div class="ui dropdown item" tabindex="0">Community<i class="dropdown icon"></i><div class="menu" tabindex="-1"></div></div>
                        <div class="ui dropdown item" tabindex="0">Shop<i class="dropdown icon"></i><div class="menu" tabindex="-1"></div></div>
                        <div class="ui dropdown item" tabindex="0">Features<i class="dropdown icon"></i><div class="menu" tabindex="-1"></div></div>
                        <div class="item">
                            <span class="rectangle"></span>
                            <span class="rectangle"></span>
                            <span class="rectangle"></span>
                        </div>
                        <div class="right menu">
                            <div class="ui buttons">
                                <button class="ui primary labeled icon button play">
                                    <i class="play icon"></i>
                                    <div class="text">Listen Now</div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 