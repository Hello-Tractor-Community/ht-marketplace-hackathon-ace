<div class="modal fade popup message-form" id="chatmodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content ">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header">
                        Message Seller
                    </div>
                    <div class="card-body">
                        <input type="hidden" id="msgidentifier">
                        <br>
                        <label for="msgs">Messsage</label>
                        <textarea name="message" id="msg" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <button class="sc-button" onclick="startChat()"><span>Send Message</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Function to show the modal
    var chatmodal;
    var thvehicle;
    var thchatid

    function showModal(user, type, vehicle, owner) {
        // Select the modal element
        thvehicle = vehicle;
        thchatid = user + "-" + type + "-" + vehicle + "-" + owner;
        $("#msgidentifier").val(thchatid);
        var modalElement = document.getElementById('chatmodal');

        // Create a new instance of the Bootstrap Modal
        chatmodal = new bootstrap.Modal(modalElement);

        // Show the modal
        chatmodal.show();
    }

    function savethemessage() {
        chatmodal.hide();
        $("#msg").val("");
        $("#msgidentifier").val("");
        savechat(thchatid, thvehicle);
    }

    function startChat() {
        var chatid = $("#msgidentifier").val();
        var message = $("#msg").val();
        var message = $("#msg").val();
        if (message != " ") {
            @if (Auth::check())
                let messaging = new MessagingArea(message, chatid, {!! json_encode(Auth::user()) !!});
                messaging.sendMessage();
            @endif
        } else {
            alert("Please Enter Message");
        }
    }
</script>
