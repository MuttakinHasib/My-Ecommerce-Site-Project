<div class="tabs-content" data-tab="6">
    <div class="content settings">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Update Site Logo</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="logo-control">
                        <form action="includes/site_settings_inc.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" class="form-control" name="siteName" placeholder="Site Name">
                            </div>
                            <div class="form-group">
                                <label id="logoName" for="updateLogo"></label>
                                <input type="file" id="updateLogo" name="file" class="inputLogo">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="submit" name="submitLogo" value="Upload Logo">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>