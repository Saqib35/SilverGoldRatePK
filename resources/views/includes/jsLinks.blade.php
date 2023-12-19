  

  
  <script>
  
  function loadScript(src, async = true, defer = true) {
            var script = document.createElement('script');
            script.src = src;
            script.async = async;
            script.defer = defer;
            document.head.appendChild(script);
        }

        function loadYourScript() {
           
            var table = $('.table');

            if (table.length) { 
                table.find('thead tr th').addClass('theadClor');
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


                  var OneSignal = window.OneSignal || [];
                    OneSignal.push(function() {
                      // Initialize OneSignal
                      OneSignal.init({
                        appId: "9d827635-a865-4c6f-8e68-1fdd56cbada6", // Replace with your actual OneSignal App ID
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
                        Authorization: 'Basic NGFiZTZjNTYtZTVhZS00OTZmLTk0ZGEtYzc0ZDdkOTJhN2Fk'
                      }
                    });

                    if (response.status === 404) {
                      // Player does not exist, add them to OneSignal
                      const addResponse = await fetch('https://onesignal.com/api/v1/players', {
                        method: 'POST',
                        headers: {
                          'Content-Type': 'application/json',
                          Authorization: 'Basic NGFiZTZjNTYtZTVhZS00OTZmLTk0ZGEtYzc0ZDdkOTJhN2Fk'
                        },
                        body: JSON.stringify({
                          app_id: '9d827635-a865-4c6f-8e68-1fdd56cbada6',
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



        }

        loadScript("{{ asset('assets/jquery-3.6.4.min.js')}}", true, true);
        loadScript("{{ asset('assets/popper.min.js')}}", true, true);
        loadScript("{{ asset('assets/bootstrap.min.js')}}", true, true);
        loadScript("https://cdn.onesignal.com/sdks/OneSignalSDK.js", true, true);

        window.onload = loadYourScript;
    </script>

  

    
    