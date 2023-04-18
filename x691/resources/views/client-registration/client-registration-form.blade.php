<div>
            <p class="text-2xl font-bold">Request For Proposal</p>
            <form class="w-auto" id="registration_form">
                <label for="contactName">Contact Name:</label><br>
                <input type="text" id="contactName" name="contactName" required="required"><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" ><br>
                <label for="projectName">Project Name:</label><br>
                <input type="text" id="projectName" name="projectName" required="required"><br>
                <label for="projectOverview">Project Overview:</label><br>
                <textarea class="w-full h-52 border-2 border-solid" maxlength="5000" id="projectOverview" name="projectOverview" required="required"></textarea>
                <br><br>
                <button id="registration_form_submit_btn"  class="white-text-btn bg-emerald-600 text-base font-medium" >Submit</button>
                <br><br>
            </form>
        </div>
    </div>

    <script>
    function afterSubmitNotification(event){
        event.preventDefault();
        window.location.href = '/after_submit_client_registration'
    }

    const registration_form = document.getElementById("registration_form");
    registration_form.addEventListener("submit", afterSubmitNotification);


</script>
