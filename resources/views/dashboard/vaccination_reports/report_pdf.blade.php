<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <style>
        @page {
            margin: 0px;
        }

        body {
            font-family: 'Helvetica', Arial, sans-serif;
            font-size: 11px;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .content {
            padding: 25px 35px 15px 35px;
        }

       
        .summary-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 8px 0;
            margin-bottom: 22px;
        }

        .summary-table td {
            width: 25%;
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            border-top: 3px solid #14b8a6;
            padding: 12px 14px;
        }

        .summary-table td.completed {
            border-top-color: #16a34a;
        }

        .summary-table td.reactions {
            border-top-color: #f59e0b;
        }

        .summary-table td.followup {
            border-top-color: #dc2626;
        }

        .summary-table .s-label {
            font-size: 9px;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .summary-table .s-value {
            font-size: 20px;
            font-weight: bold;
            color: #0f172a;
            margin-top: 4px;
        }

        .summary-table td.completed .s-value {
            color: #16a34a;
        }

        .summary-table td.reactions .s-value {
            color: #d97706;
        }

        .summary-table td.followup .s-value {
            color: #dc2626;
        }

        
        .section-label {
            font-size: 12px;
            font-weight: bold;
            color: #0f766e;
            margin-bottom: 8px;
            padding-bottom: 6px;
            border-bottom: 2px solid #ccfbf1;
        }

      
        table.records {
            width: 100%;
            border-collapse: collapse;
        }

        table.records thead th {
            background-color: #134e4a;
            color: #ffffff;
            padding: 9px 7px;
            text-align: left;
            font-size: 9px;
            text-transform: uppercase;
            letter-spacing: 0.4px;
        }

        table.records tbody td {
            padding: 8px 7px;
            font-size: 9.5px;
            border-bottom: 1px solid #eef2f2;
            color: #334155;
        }

        table.records tbody tr:nth-child(even) {
            background-color: #f7fafa;
        }

        .id-pill {
            background-color: #e2e8f0;
            color: #475569;
            padding: 2px 7px;
            border-radius: 8px;
            font-size: 9px;
            font-weight: bold;
        }

        .status-badge {
            display: inline-block;
            padding: 3px 10px;
            border-radius: 10px;
            font-size: 8.5px;
            font-weight: bold;
            color: #ffffff;
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

        .muted {
            color: #94a3b8;
        }

        .footer {
            margin-top: 25px;
            padding: 14px 35px;
            background-color: #f8fafc;
            border-top: 1px solid #e2e8f0;
            font-size: 8.5px;
            color: #94a3b8;
            text-align: center;
        }
    </style>
</head>

<body>

   
    <table width="100%" cellpadding="0" cellspacing="0" bgcolor="#0f766e" style="background-color:#0f766e;">
        <tr>
            <td style="padding: 28px 35px; background-color:#0f766e;">
                <table width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="vertical-align: middle;">
                            <p
                                style="font-size:11px; letter-spacing:2px; text-transform:uppercase; color:#e6fffa; margin:0 0 8px 0;">
                                Vaccination Booking System</p>
                            <p style="margin:0; font-size:26px; font-weight:bold; color:#ffffff;">Vaccination Report</p>
                        </td>
                        <td style="text-align:right; vertical-align: middle; font-size:10px; color:#e6fffa;">
                            Report generated
                            <div style="font-size:13px; color:#ffffff; font-weight:bold; margin-top:4px;">
                                {{ now()->format('F d, Y — h:i A') }}
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <div class="content">

    
        <table class="summary-table">
            <tr>
                <td>
                    <div class="s-label">Total Records</div>
                    <div class="s-value">{{ $totalCount }}</div>
                </td>
                <td class="completed">
                    <div class="s-label">Completed</div>
                    <div class="s-value">{{ $completedCount }}</div>
                </td>
                <td class="reactions">
                    <div class="s-label">Reactions Reported</div>
                    <div class="s-value">{{ $reactionCount }}</div>
                </td>
                <td class="followup">
                    <div class="s-label">Follow-up Due</div>
                    <div class="s-value">{{ $followUpDueCount }}</div>
                </td>
            </tr>
        </table>

        <div class="section-label">All Records</div>

        <table class="records">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Booking #</th>
                    <th>Vaccination Date</th>
                    <th>Dose</th>
                    <th>Next Dose</th>
                    <th>Administered By</th>
                    <th>Status</th>
                    <th>Side Effects</th>
                    <th>Remarks</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($records as $record)
                    <tr>
                        <td><span class="id-pill">#{{ $record->id }}</span></td>
                        <td>{{ $record->booking->booking_number ?? '—' }}</td>
                        <td>{{ $record->vaccination_date->format('Y-m-d') }}</td>
                        <td>{{ $record->dose_number }}</td>
                        <td>{{ optional($record->next_dose_date)->format('Y-m-d') ?? '—' }}</td>
                        <td>{{ $record->administeredBy->name ?? '—' }}</td>
                        <td>
                            @if ($record->status == 'completed')
                                <span class="status-badge status-completed">Completed</span>
                            @elseif ($record->status == 'pending')
                                <span class="status-badge status-pending">Pending</span>
                            @else
                                <span class="status-badge status-cancelled">Cancelled</span>
                            @endif
                        </td>
                        <td>{{ $record->side_effects ?: 'None reported' }}</td>
                        <td>{{ $record->remarks ?: '—' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" style="text-align:center; padding: 25px;" class="muted">No records found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>

    <div class="footer">
        This is a system-generated document from the Vaccination Booking System — {{ now()->format('Y') }}
    </div>

</body>

</html>