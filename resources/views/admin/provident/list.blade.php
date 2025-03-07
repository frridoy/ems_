@extends('admin.master')

@section('content')
<div class="shadow p-4 d-flex justify-content-between align-items-center">
    <h4 class="text-uppercase">Provident Fund List</h4>
    <div>
        <form method="GET" action="{{ route('providentList') }}">
            <div class="input-group">
                <input type="number" name="pf_percentage" class="form-control" placeholder="Provident Fund %"
                    value="{{ $pfPercentage }}" min="0" max="100">
                <button type="submit" class="btn btn-success">Apply</button>
            </div>
        </form>
    </div>
</div>
<div class="container my-5 py-5">
    <table class="table align-middle mb-4 text-center bg-white">
        <thead class="bg-light">
            <tr>
                <th>SL NO</th>
                <th>Employee Name</th>
                <th>Designation</th>
                <th>Department</th>
                <th>Total Salary</th>
                <th>Total Provident Fund</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $key => $employee)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $employee->employee_name }}</td>
                <td>{{ $employee->designation_name }}</td>
                <td>{{ $employee->department_name }}</td>
                <td>{{ number_format($employee->total_salary, 2) }} BDT</td>
                <td>{{ number_format($employee->total_provident_fund, 2) }} BDT</td>

            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="w-25 mx-auto">
        {{ $employees->links() }}
    </div>
</div>
@endsection