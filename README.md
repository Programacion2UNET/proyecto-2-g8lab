# Dependencies
  ➜ php >= 7.x.x

  ➜ My Setup

    ``` 
    DocumentRoot "/home/grieco/DataShare/UNET-INTENSIVO/proyecto-2-g8lab"
    <Directory "/home/grieco/DataShare/UNET-INTENSIVO/proyecto-2-g8lab">
        #
        # Possible values for the Options directive are "None", "All",
        # or any combination of:
        #   Indexes Includes FollowSymLinks SymLinksifOwnerMatch ExecCGI MultiViews
        #
        # Note that "MultiViews" must be named *explicitly* --- "Options All"
        # doesn't give it to you.
        #
        # The Options directive is both complicated and important.  Please see
        # http://httpd.apache.org/docs/trunk/mod/core.html#options
        # for more information.
        #
        #Options Indexes FollowSymLinks
        # XAMPP
        Options Indexes FollowSymLinks ExecCGI Includes
        RewriteEngine on

        #
        # AllowOverride controls what directives may be placed in .htaccess files.
        # It can be "All", "None", or any combination of the keywords:
        #   Options FileInfo AuthConfig Limit
        #
        #AllowOverride None
        # since XAMPP 1.4:
        AllowOverride All
        Allow From All
        #
        # Controls who can get stuff from this server.
        #
        Require all granted
    </Directory>
    ```
