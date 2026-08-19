<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <style>
        @page {
            margin: 30px;
        }

        body {
            font-family: 'Helvetica', Arial, sans-serif;
            font-size: 13px;
            color: #333;
        }

        .header {
            border-bottom: 3px solid #14b8a6;
            padding-bottom: 15px;
            margin-bottom: 25px;
        }

        .header h2 {
            margin: 0;
            color: #0f766e;
            font-size: 22px;
        }

        .header p {
            margin: 4px 0 0 0;
            color: #777;
            font-size: 11px;
        }

        .status-badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 11px;
            font-weight: bold;
            color: #fff;
        }

        .status-completed {
            background-color: #16a34a;
        }

        .status-pending {
            background-color: #f59e0b;
        }

        .status-cancelled {
            background-color: #dc2626;
        }

        table.info-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table.info-table tr {
            border-bottom: 1px solid #eee;
        }

        table.info-table td {
            padding: 10px 8px;
            vertical-align: top;
        }

        table.info-table td.label {
            width: 180px;
            font-weight: bold;
            color: #555;
            background-color: #f8f9fa;
            border-right: 1px solid #eee;
        }

        table.info-table td.value {
            color: #222;
        }

        .section-title {
            background-color: #ecfdf5;
            color: #0f766e;
            font-weight: bold;
            padding: 8px 10px;
            margin-top: 20px;
            margin-bottom: 0;
            border-left: 4px solid #14b8a6;
            font-size: 13px;
        }

        .footer {
            margin-top: 40px;
            padding-top: 10px;
            border-top: 1px solid #ddd;
            font-size: 10px;
            color: #999;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="header">
        <h2>Vaccination Record</h2>
        <p>Generated on:
                                {{ now()->format('F d, Y — h:i A') }}
            </p>
    </div>

    <p class="section-title">Booking &amp; Patient Information</p>
    <table class="info-table">
        <tr>
            <td class="label">Record ID</td>
            <td class="value">#{{ $vaccinationRecord->id }}</td>
        </tr>
        <tr>
            <td class="label">Booking #</td>
            <td class="value">{{ $vaccinationRecord->booking->booking_number ?? '—' }}</td>
        </tr>
        <tr>
            <td class="label">Child Name</td>
            <td class="value">
                {{ $vaccinationRecord->booking->child->first_name ?? '' }}
                {{ $vaccinationRecord->booking->child->last_name ?? '' }}
            </td>
        </tr>
    </table>

    <p class="section-title">Vaccination Details</p>
    <table class="info-table">
        <tr>
            <td class="label">Vaccination Date</td>
            <td class="value">{{ $vaccinationRecord->vaccination_date->format('F d, Y') }}</td>
        </tr>
        <tr>
            <td class="label">Dose Number</td>
            <td class="value">Dose {{ $vaccinationRecord->dose_number }}</td>
        </tr>
        <tr>
            <td class="label">Next Dose Date</td>
            <td class="value">{{ optional($vaccinationRecord->next_dose_date)->format('F d, Y') ?? '—' }}</td>
        </tr>
        <tr>
            <td class="label">Administered By</td>
            <td class="value">{{ $vaccinationRecord->administeredBy->name ?? '—' }}</td>
        </tr>
        <tr>
            <td class="label">Status</td>
            <td class="value">
                @if ($vaccinationRecord->status == 'completed')
                    <span class="status-badge status-completed">Completed</span>
                @elseif ($vaccinationRecord->status == 'pending')
                    <span class="status-badge status-pending">Pending</span>
                @else
                    <span class="status-badge status-cancelled">Cancelled</span>
                @endif
            </td>
        </tr>
    </table>

    <p class="section-title">Additional Notes</p>
    <table class="info-table">
        <tr>
            <td class="label">Side Effects</td>
            <td class="value">{{ $vaccinationRecord->side_effects ?? 'None reported' }}</td>
        </tr>
        <tr>
            <td class="label">Remarks</td>
            <td class="value">{{ $vaccinationRecord->remarks ?? '—' }}</td>
        </tr>
    </table>

    <div class="footer">
        This is a system-generated document from the Vaccination Booking System.
    </div>

</body>

</html>