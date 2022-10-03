
$("#subject-form").submit(function(e)
{
    if ($('#subject_name').val() == "")
    {
        alert('Subject is required.');
        e.preventDefault();
    }

    if ($('#subject_name').val().length > 200)
    {
        alert('Subject can not more than 200 character.');
    }
});

