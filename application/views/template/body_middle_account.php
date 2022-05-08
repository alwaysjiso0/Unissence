<script>

    function highlightActivity(e) {
        e.preventDefault();
        if (document.querySelector('#body_middle_account div.active') !== null) {
            document.querySelector('#body_middle_account div.active').classList.remove('active');
        }
        e.target.classList.add("active");
    }
</script>

<div id="body_middle_account" class="col-lg-3" onclick="highlightActivity(event)">
    <div class="qlist_enter">
        My Questions
    </div>
    <div class="bmark_enter">Bookmarks</div>
    <div class="chat_enter">Chatrooms</div>  
    <div class="acc_enter">Manage Account</div>
</div>

