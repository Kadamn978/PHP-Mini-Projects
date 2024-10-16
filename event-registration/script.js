$(document).ready(function () {
    $('.edit').on('click', function () {
        const id = $(this).data('id');
        const row = $(this).closest('tr');
        
        $('#eventId').val(id);
        $('#name').val(row.find('td:eq(0)').text());
        $('#emailID').val(row.find('td:eq(1)').text());
        $('#phone').val(row.find('td:eq(2)').text());
        $('#eventType').val(row.find('td:eq(3)').text());
        $('#eventName').val(row.find('td:eq(4)').text());
        $('#eventDate').val(row.find('td:eq(5)').text());
        $('#eventTime').val(row.find('td:eq(6)').text());
        $('#requests').val(row.find('td:eq(7)').text());
        
        $('#eventForm').find('button[type="submit"]').attr('name
