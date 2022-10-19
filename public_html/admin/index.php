<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMIN PANEL</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./admin.css" />
  </head>
  <body>
    <div class="admin-panel">
      <div class="slidebar">
        <ul>
          <li>
            <a href="" name="tab1">
              <i class="material-icons arrow-icon" data-icon="query_stats"></i
              >Statistic</a
            >
          </li>
          
          <li>
            <a href="" name="tab2"><i class="material-icons arrow-icon" data-icon="contact_support"></i
                >Contact Request</a>
          </li>
          
          
          <li>
            <a href="" name="tab3"><i class="material-icons arrow-icon" data-icon="insert_drive_file"></i
                >File Management</a>
          </li>
          
        
        </ul>
      </div>

      <div class="main">
        <div id="tab1"><h2 class="header">Statistics</h2></div>
        <div id="tab2"><h2 class="header">Contact Request</h2></div>
        <div id="tab3"><h2 class="header">File Management</h2></div>
        
      </div>
    </div>

    <script src="/plugins/jquery/jquery.min.js"></script>
    <script src="./admin.js"></script>
  </body>
</html>
