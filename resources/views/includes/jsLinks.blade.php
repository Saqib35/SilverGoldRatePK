  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" defer></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
  
  $(document).ready(function() {
    var table = $('.table');

    if (table.length) { 
      table.find('thead tr th').addClass('theadClor');
    } else {
     
    }

    $('table').each(function() {
            var $table = $(this);
            $table.find('thead th[scope="col"]').removeAttr('scope').addClass('theadClor');
     });

     $('table').each(function() {
            var $table = $(this);
            if (!$table.hasClass('table') || !$table.hasClass('table-bordered') || !$table.hasClass('table-hover')) {
                $table.addClass('table table-bordered table-hover');
            }
        });

      $('table').each(function() {
          var $table = $(this);
          if (!$table.parent().is('div.table-responsive')) {
              $table.wrap('<div class="table-responsive"></div>');
          }
      });
      

  });


  

</script>

    <!-- <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js"></script> -->
<!--  
 <script>
     
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    // Initialize OneSignal
    OneSignal.init({
      appId: "524c15cf-c4d6-4482-9fd0-3d2e7a9133f1", // Replace with your actual OneSignal App ID
    });

  OneSignal.isPushNotificationsEnabled(function(isEnabled) {
    if (isEnabled) {
      console.log('User is subscribed to push notifications.');
    } else {
      console.log('User is not subscribed to push notifications.');
      OneSignal.showSlidedownPrompt();
    }
    
  });


    // Subscribe or Check Player Existence
    OneSignal.on('subscriptionChange', function(isSubscribed) {
      if (isSubscribed) {
        OneSignal.getUserId(function(userId) {
          // User is subscribed, you can perform actions with the user's ID
          console.log('User ID:', userId);
        });
      } else {
        // User is unsubscribed, generate UUID and add player if not exists
        var uuid = generateUUID(); // Generate a UUID
        ensurePlayerExists(uuid); // Call function to add player if not exists
      }
    });
  });

  // Function to generate a UUID (v4)
  function generateUUID() {
    return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
      var r = Math.random() * 16 | 0,
          v = c == 'x' ? r : (r & 0x3 | 0x8);
      return v.toString(16);
    });
  }

  async function ensurePlayerExists(userId) {
    try {
      // Check if the player exists using the OneSignal API
      const response = await fetch(`https://onesignal.com/api/v1/players/${userId}`, {
        method: 'GET',
        headers: {
          Authorization: 'Basic MjYzZTM0MWMtMjliNC00MTZiLTg1MzktMjU1MWI2YjY4MDE5'
        }
      });

      if (response.status === 404) {
        // Player does not exist, add them to OneSignal
        const addResponse = await fetch('https://onesignal.com/api/v1/players', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            Authorization: 'Basic MjYzZTM0MWMtMjliNC00MTZiLTg1MzktMjU1MWI2YjY4MDE5'
          },
          body: JSON.stringify({
            app_id: '524c15cf-c4d6-4482-9fd0-3d2e7a9133f1',
            identifier: userId, // Use the generated UUID as the identifier
            // Additional player data if needed
          })
        });

        const addData = await addResponse.json();
        console.log('Player added:', addData);
      } else if (response.status === 200) {
        // Player exists
        const playerData = await response.json();
        console.log('Player exists:', playerData);
      } else {
        console.error('Failed to fetch player data:', response.statusText);
      }
    } catch (error) {
      console.error('Error:', error);
    }
  }
</script>
     -->
    