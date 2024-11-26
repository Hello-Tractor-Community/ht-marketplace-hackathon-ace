@if (Auth::check())
    <script>
        function savechat(chatid, vehicle) {
            let dataToSend = {
                user: "{{ Auth::user()->id }}",
                vehicle: vehicle,
                chat: chatid
            };

            reusablePost("{{ route('save.chat') }}", dataToSend,
                function(response) {
                    console.log("Success:", response);
                    if (response['success'] == true) {
                        console.log("Success");
                    }
                },
                function(xhr, status, error) {
                    console.error("Error:", error);
                }
            );

        }
    </script>
@endif

@if (Auth::check())
    <script>
        function favourite(data, vehicle) {
            let dataToSend = {
                user: "{{ Auth::user()->id }}",
                vehicle: vehicle
            };

            reusablePost("{{ route('save.favourite') }}", dataToSend,
                function(response) {
                    console.log("Success:", response);
                    if (response['success'] == true) {
                        if (response['data']['message'] == "Saved") {
                            data.style.background = "orange";
                        } else {
                            data.style.background = "white";
                        }
                        console.log("Success");
                    }
                },
                function(xhr, status, error) {
                    console.error("Error:", error);
                }
            );

        }
    </script>
@endif
<script>
    function reusablePost(url, data, successCallback, errorCallback) {
        $.ajax({
            type: "POST",
            url: url,
            data: JSON.stringify(data),
            contentType: "application/json",
            success: function(response) {
                successCallback(response);
            },
            error: function(xhr, status, error) {
                errorCallback(xhr, status,
                    error);
            }
        });
    }
</script>
