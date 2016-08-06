<div class="content-wrap clearfix">

    <div class="section-content clearfix">

        <div class="content-left">

            <article>
                <section>
                    <div id="buddypress">
                        <div id="item-header">
                            <div id="cover-image-container">
                                <a href="#" id="header-cover-image"><img src="../img/thumbnail/timeline.jpg"></a>
                                <div id="item-header-cover-image">
                                    <div id="item-header-avatar">
                                        <a href="#" ><img src="../img/thumbnail/john.jpg" class="avatar avatar-150 photo"/></a>
                                    </div>

                                    <div id="item-header-content">
                                        <h2 class="user-nicename">John Louise Berdida</h2>
                                        <div id="item-buttons"></div>
                                        <span class="activity">active 1 day, 20 hours ago</span>
                                        <div id="item-meta">
                                            <div id="latest-update"></div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div> <!--item-header-->

                        <div id="item-nav">
                            <div class="item-list-tabs no-ajax" id="objectnav" role="navigation">
                                <ul>
                                    <li id="activity-personal-li" class="current">
                                        <a href="#" id="user-activity">Activity</a>
                                    </li>
                                    <li id="xprofile-personal-li" class="current">
                                        <a id="user-xprofile" href="#">Profile</a>
                                    </li>
                                    <li id="friends-personal-li" class="current">
                                        <a id="user-friends" href="#">Friends <span class="count">1</span></a>
                                    </li>
                                    <li id="groups-personal-li" class="current select">
                                        <a id="user-groups" href="{{ url('/profile/profile-settings') }}">Settings</a>
                                    </li>
                                </ul>
                            </div>
                        </div><!--item-nav-->

                        <div id="item-body">
                            <div><a href="{{ url('/profile/profile-settings') }}">General</a></div>
                            <div ><a href="{{ url('/profile/profile-edit') }}">Profile Visibility</a></div>
                            <div><a href="{{ url('profile/') }}" class="current-selected">Type of user</a></div>
                            <div><a href="{{ url('/profile/profile-delete') }}">Delete Account</a></div>

                            <br>

                            <div class="alert alert-success" role="alert">
                                User type verification : You can choose between Pet enthusiast or Petshops/Clinics.
                            </div>

                            <div class="editfield">
                                <label>User's Info Type ?</label>
                                <select>
                                    <option>Pet Enthusiast</option>
                                    <option>Pet Shops</option>
                                    <option>Vet Clinics</option>
                                </select>
                                <div class="field-visibility-settings-notoggle">
                                    Any changes for this is : <span class="current-visibility-level"> irreversible</span>
                                </div>
                                <p class="description"></p>
                            </div>
                            <br>
                            <button class="btn-comment pull-left" id="delete-account-button" disabled="">Update Changes</button>
                        </div>



                        <div class="clearfix"></div>


                    </div>
                </section>
                <hr>


            </article>



        </div>


        <div class="widget-right">
            <aside class="widget">
                <h5 class="widget_title">
                    Search Members
                </h5>

                <form class="standard-form">
                    <div>
                        <label>Name</label>
                        <input type="text"/>
                    </div>
                    <div>
                        <label>Age</label>
                        <input type="text"/>
                    </div>
                    <div>
                        <label>Pet Breed</label>
                        <select>
                            <option>--Select Breed--</option>
                            <option>German Shepherd</option>
                            <option>Askal</option>
                            <option>Pussy</option>
                            <option>lang mananap</option>
                        </select>
                    </div>
                    <div class="submit">
                        <button class="button-search hvr-pulse">SEARCH</button>
                    </div>
                </form>

            </aside>

        </div>

    </div>
</div> <!--content-wrap-->
