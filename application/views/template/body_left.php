<script>
    function highlightLeft(e) {
        e.preventDefault();
        if (document.querySelector('#body_left ul li.active') !== null) {
            document.querySelector('#body_left ul li.active').classList.remove('active');
        }
        e.target.className = "active";
    }
</script>

<div id="body-wrapper">
    <div id="body_left" class="col-lg-2">
        <ul onclick="highlightLeft(event)">
            <li id="general_tab">
                General
            </li>
            <li id="academics_tab">
                Academics
            </li>
            <li id="employability_tab">
                Employability
            </li>
            <li id="financial_tab">
                Financials & Visa
            </li>
            <li id="social_tab">
                Social Life
            </li>
        </ul>
    </div>

