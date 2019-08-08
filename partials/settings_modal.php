<div class="ui container">
    <div id="settings-modal" class="ui large modal settings-modal">
        <i class="close icon"></i>
        <div class="ui grid">
            <div class="five wide column setings-menu">
                <div class="ui padded basic segment">
                    <h2 class="ui medium header">Settings</h2>
                </div>
                <div class="ui basic segments settings-menu-items">
                    <div class="ui padded basic segment active">
                        <i class="user icon"></i>
                        Account
                    </div>
                    <div class="ui padded basic segment">
                        <i class="cog icon"></i>
                        General
                    </div>
                    <div class="ui padded basic segment">
                        <i class="bell icon"></i>
                        Notifications
                    </div>
                </div>
            </div>
            <div class="eleven wide column settings-info">
                <div class="ui padded basic segment header-group">
                    <h2 class="ui medium header">Account Settings</h2>
                    <div class="sub header">This information will help you manage all the stuff about your profile.</div>
                </div>
                <div class="ui basic fitted segment settings-info-form">
                    <form class="ui form">
                        <div class="ui grid">
                            <div class="five wide column">
                                <div class="ui basic segment">
                                    <img class="ui small rounded image" src="images/settings_modal/setting_modal_avatar.jpg">
                                    <div class="ui dropdown">
                                        <div class="text">Change Picture</div>
                                        <i class="dropdown icon"></i>
                                        <div class="menu">
                                            <div class="item">Option1</div>
                                            <div class="item">Option2</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="eleven wide column">
                                <div class="ui basic segment">
                                    <div class="field">
                                        <label><div class="ui sub header">Your Name</div></label>
                                        <input type="text" name="name" placeholder="Johan Robert">
                                    </div>
                                    <div class="field">
                                        <label><div class="ui sub header">Email Address</div></label>
                                        <input type="email" name="email" placeholder="johan.robert.2@email.com">
                                    </div>
                                    <div class="field">
                                        <label><div class="ui sub header">Password</div></label>
                                        <input type="password" name="password" placeholder="************">
                                    </div>
                                </div>
                            </div>
                            <div class="sixteen wide column form-buttons">
                                <div class="ui basic right aligned fitted segment">
                                    <div class="buttons-groups">
                                        <button class="ui button" name="results">Cancel</button>
                                        <button class="ui primary button" type="submit">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>