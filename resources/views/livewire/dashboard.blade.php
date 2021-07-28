<div>
    <canvas id="dashboard" class="w-full h-full"></canvas>
    <script>
        var ctx = document.getElementById('dashboard').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Admin', 'ICEP Director', 'ILRAD Director', 'Dean', 'Staff',],
                datasets: [{
                    backgroundColor: [
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                    ],
                    data: [
                        {{ $users->where('role',0)->count() }},
                        {{ $users->where('role',1)->count() }},
                        {{ $users->where('role',2)->count() }},
                        {{ $users->where('role',3)->count() }},
                        {{ $users->where('role',4)->count() }},
                    ],
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false,
                    }
                }
            }
        });
    </script>
</div>
