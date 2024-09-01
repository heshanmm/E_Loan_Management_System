<body>
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <div class="row mt-3 justify-content-center">
                <h1>EMI Calculator</h1>
                <div class="card col-6 mt-5" style="background-color: rgb(206, 228, 255);">
                    
                    <form id="emiForm">
                        @csrf
                        <div class="form-group mt-3">
                            <div class="row">
                                <div class="col-4 mt-2">
                                    <label for="nic">NIC</label>
                                </div>
                                <div class="col-7">
                                    <input type="text" class="form-control" id="nic" name="nic" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="row">
                                <div class="col-4">
                                    <label for="principal">Principal</label>
                                </div>
                                <div class="col-7">
                                    <input type="number" class="form-control" id="principal" name="principal"
                                        step="0.01" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="row">
                                <div class="col-4">
                                    <label for="interest_rate">Annual Interest Rate (%)</label>
                                </div>
                                <div class="col-7">
                                    <input type="number" class="form-control" id="interest_rate" name="interest_rate"
                                        step="0.01" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="row">
                                <div class="col-4">
                                    <label for="term">Term (Years)</label>
                                </div>
                                <div class="col-7">
                                    <input type="number" class="form-control" id="term" name="term" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="row">
                                <div class="col-4">
                                    <label for="emi_amount">EMI Amount</label>
                                </div>
                                <div class="col-7">
                                    <input type="text" class="form-control" id="emi_amount" name="emi_amount" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 mb-2" style="margin-left: 3rem">
                            <div class="col-3">
                                <button type="button" class="btn btn-primary" id="calculateBtn">Calculate EMI</button>
                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-success" id="saveBtn">Save</button>
                            </div>
                            <div class="col-4">
                                <button type="button" class="btn btn-info" id="showScheduleBtn"> Repayment
                                    Schedule</button>
                            </div>
                            <div class="col-3">
                                <button type="reset" class="btn btn-danger">Clear</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div id="scheduleTable" class="mt-5" style="display:none;">
                <h2>Repayment Schedule</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Month</th>
                            <th>EMI Amount</th>
                            <th>Interest Payment</th>
                            <th>Principal Payment</th>
                            <th>Remaining Balance</th>
                        </tr>
                    </thead>
                    <tbody id="scheduleBody">
                    </tbody>
                </table>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#calculateBtn').click(function() {
                    $.post('/calculate-emi', $('#emiForm').serialize(), function(response) {
                        $('#emi_amount').val(response.emi_amount);
                    });
                });

                $('#saveBtn').click(function() {
                    $.post('/save-emi', $('#emiForm').serialize(), function(response) {
                        if (response.success) {
                            alert('EMI data saved successfully!');
                        }
                    });
                });

                $('#showScheduleBtn').click(function() {
                    $.post('/show-schedule', $('#emiForm').serialize(), function(response) {
                        var scheduleBody = $('#scheduleBody');
                        scheduleBody.empty();
                        response.schedule.forEach(function(item) {
                            scheduleBody.append(
                                `<tr>
                            <td>${item.month}</td>
                            <td>${item.emi_amount}</td>
                            <td>${item.interest_payment}</td>
                            <td>${item.principal_payment}</td>
                            <td>${item.remaining_balance}</td>
                        </tr>`
                            );
                        });
                        $('#scheduleTable').show();
                    });
                });
            });
        </script>
    @endsection
</body>

</html>
