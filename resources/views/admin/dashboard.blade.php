@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
   <div class="row">
    <div class="ms-3">
        <h3 class="mb-0 h4 font-weight-bolder">Trang chủ</h3>
        <p class="mb-4">
          Thống kê doanh số, giá trị và tỷ lệ theo khu vực.
        </p>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-header p-2 ps-3">
            <div class="d-flex justify-content-between">
              <div>
                <p class="text-sm mb-0 text-capitalize">Tổng doanh thu</p>
                <h4 class="mb-0">
                  1,250,000,000 VND
                </h4>
              </div>
              <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                <i class="bi bi-calendar-week opacity-10"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-header p-2 ps-3">
            <div class="d-flex justify-content-between">
              <div>
                <p class="text-sm mb-0 text-capitalize">Tổng người dùng</p>
                <h4 class="mb-0">
                  1,250
                </h4>
              </div>
              <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                <ion-icon name="people-outline"></ion-icon>
              </div>
            </div>
          </div>
  
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-header p-2 ps-3">
            <div class="d-flex justify-content-between">
              <div>
                <p class="text-sm mb-0 text-capitalize">Tổng sản phẩm</p>
                <h4 class="mb-0">
                  125
                </h4>
              </div>
              <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                <ion-icon name="phone-portrait-outline"></ion-icon>
              </div>
            </div>
          </div>
  
        </div>
      </div>
      <div class="col-xl-3 col-sm-6">
        <div class="card">
          <div class="card-header p-2 ps-3">
            <div class="d-flex justify-content-between">
              <div>
                <p class="text-sm mb-0 text-capitalize">Doanh số tháng này</p>
                <h4 class="mb-0">103,430,000 VND</h4>
              </div>
              <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                <ion-icon name="trending-up-outline"></ion-icon>
              </div>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          
        </div>
      </div>
    </div>
    <div class="row">
  
      <div class="col-lg-4 col-md-6 mt-4 mb-4">
        <div class="card">
          <div class="card-body">
            <h6 class="mb-0">Số lượng sản phẩm theo danh mục</h6>
            <p class="text-sm">Hiển thị số lượng sản phẩm trong mỗi danh mục</p>
            <div class="pe-2">
              <div class="chart">
                <canvas id="categoryChart" height="170"></canvas>
              </div>
            </div>
            <hr class="dark horizontal">
            <div class="d-flex">
              <i class="material-symbols-rounded text-sm my-auto me-1">schedule</i>
              <p class="mb-0 text-sm">Cập nhật gần đây</p>
            </div>
          </div>
        </div>
      </div>
  
      <div class="col-lg-4 col-md-6 mt-4 mb-4">
        <div class="card">
          <div class="card-body">
            <h6 class="mb-0">Doanh thu theo tháng</h6>
            <p class="text-sm">Hiển thị doanh thu hàng tháng</p>
            <div class="pe-2">
              <div class="chart">
                <canvas id="myLineChart" width="400" height="225"></canvas>
              </div>
            </div>
            <hr class="dark horizontal">
            <div class="d-flex">
              <i class="material-symbols-rounded text-sm my-auto me-1">schedule</i>
              <p class="mb-0 text-sm">Cập nhật gần đây</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-4 mb-3">
        <div class="card">
          <div class="card-body">
            <h6 class="mb-0">Doanh thu theo ngày</h6>
            <p class="text-sm">Hiển thị doanh thu hàng ngày</p>
            <div class="pe-2">
              <div class="chart">
              <canvas id="dailyRevenueChart" height="170"></canvas>
              </div>
            </div>
            <hr class="dark horizontal">
            <div class="d-flex">
              <i class="material-symbols-rounded text-sm my-auto me-1">schedule</i>
              <p class="mb-0 text-sm">Vừa cập nhật</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-4">
      <div class="col-lg-8 col-md-6 mb-md-0 mb-4" style="overflow: hidden;">
        <div class="card" style="overflow: hidden;">
          <div class="card-header pb-0">
            <div class="row">
              <div class="col-lg-6 col-7">
                <h6>Bản đồ khách hàng</h6>
              </div>
            </div>
          </div>
          <div class=" px-0 pb-2">
            <div class="card bg-black" style=" object-fit: cover; align-items:last baseline; width: 840px; height: 500px; justify-content: center;">
              <img src="../assets/img/earth.svg" alt="" style="width: 1200px; height: 790px">
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card h-100">
          <div class="card-header pb-0">
            <h6>Tổng quan đơn hàng</h6>
            <p class="text-sm">
              <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
              <span class="font-weight-bold">24%</span> tháng này
            </p>
          </div>
          <div class="card-body p-3">
            <div class="timeline timeline-one-side">
              <div class="timeline-block mb-3">
                <span class="timeline-step">
                  <i class="material-symbols-rounded text-success text-gradient">notifications</i>
                </span>
                <div class="timeline-content">
                  <h6 class="text-dark text-sm font-weight-bold mb-0">Đơn hàng #1832412 - 2,400,000đ</h6>
                  <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22/06/2023 19:20</p>
                </div>
              </div>
              <div class="timeline-block mb-3">
                <span class="timeline-step">
                  <i class="material-symbols-rounded text-danger text-gradient">code</i>
                </span>
                <div class="timeline-content">
                  <h6 class="text-dark text-sm font-weight-bold mb-0">Đơn hàng mới #1832413</h6>
                  <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21/06/2023 23:00</p>
                </div>
              </div>
              <div class="timeline-block mb-3">
                <span class="timeline-step">
                  <i class="material-symbols-rounded text-info text-gradient">shopping_cart</i>
                </span>
                <div class="timeline-content">
                  <h6 class="text-dark text-sm font-weight-bold mb-0">Thanh toán đơn hàng #1832414</h6>
                  <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21/06/2023 21:34</p>
                </div>
              </div>
              <div class="timeline-block mb-3">
                <span class="timeline-step">
                  <i class="material-symbols-rounded text-warning text-gradient">credit_card</i>
                </span>
                <div class="timeline-content">
                  <h6 class="text-dark text-sm font-weight-bold mb-0">Thêm thẻ mới cho đơn hàng #4395133</h6>
                  <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">20/06/2023 02:20</p>
                </div>
              </div>
              <div class="timeline-block mb-3">
                <span class="timeline-step">
                  <i class="material-symbols-rounded text-primary text-gradient">key</i>
                </span>
                <div class="timeline-content">
                  <h6 class="text-dark text-sm font-weight-bold mb-0">Mở khóa gói phát triển</h6>
                  <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">18/06/2023 04:54</p>
                </div>
              </div>
              <div class="timeline-block">
                <span class="timeline-step">
                  <i class="material-symbols-rounded text-dark text-gradient">payments</i>
                </span>
                <div class="timeline-content">
                  <h6 class="text-dark text-sm font-weight-bold mb-0">Đơn hàng mới #9583120</h6>
                  <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">17/06/2023</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
  <script>
    // Dữ liệu cho biểu đồ sản phẩm theo danh mục
    document.addEventListener('DOMContentLoaded', function() {
      // Biểu đồ sản phẩm theo danh mục
      const categoryData = {
        labels: ['iPhone', 'Samsung', 'Xiaomi', 'Oppo', 'Vivo', 'Realme'],
        datasets: [{
          label: 'Số lượng sản phẩm',
          data: [35, 25, 20, 18, 15, 12],
          backgroundColor: [
            'rgba(255, 99, 132, 0.7)',
            'rgba(54, 162, 235, 0.7)',
            'rgba(255, 206, 86, 0.7)',
            'rgba(75, 192, 192, 0.7)',
            'rgba(153, 102, 255, 0.7)',
            'rgba(255, 159, 64, 0.7)'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
        }]
      };

      const categoryCtx = document.getElementById('categoryChart').getContext('2d');
      new Chart(categoryCtx, {
        type: 'doughnut',
        data: categoryData,
        options: {
          responsive: true,
          plugins: {
            legend: {
              position: 'right',
            },
            title: {
              display: true,
              text: 'Sản phẩm theo hãng điện thoại'
            }
          }
        }
      });

      // Biểu đồ doanh thu theo tháng
      const monthlyData = {
        labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
        datasets: [{
          label: 'Doanh thu (VND)',
          data: [120000000, 190000000, 150000000, 180000000, 200000000, 230000000, 200000000, 300000000, 250000000, 280000000, 320000000, 350000000],
          fill: false,
          borderColor: 'rgb(75, 192, 192)',
          tension: 0.1
        }]
      };

      const lineCtx = document.getElementById('myLineChart').getContext('2d');
      new Chart(lineCtx, {
        type: 'line',
        data: monthlyData,
        options: {
          responsive: true,
          scales: {
            y: {
              beginAtZero: true,
              ticks: {
                callback: function(value) {
                  return new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND', maximumFractionDigits: 0 }).format(value);
                }
              }
            }
          },
          plugins: {
            tooltip: {
              callbacks: {
                label: function(context) {
                  return new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND', maximumFractionDigits: 0 }).format(context.parsed.y);
                }
              }
            }
          }
        }
      });

      // Biểu đồ doanh thu theo ngày
      const dailyData = {
        labels: ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ nhật'],
        datasets: [{
          label: 'Doanh thu (VND)',
          data: [15000000, 25000000, 18000000, 30000000, 45000000, 50000000, 20000000],
          backgroundColor: [
            'rgba(255, 99, 132, 0.7)',
            'rgba(54, 162, 235, 0.7)',
            'rgba(255, 206, 86, 0.7)',
            'rgba(75, 192, 192, 0.7)',
            'rgba(153, 102, 255, 0.7)',
            'rgba(255, 159, 64, 0.7)',
            'rgba(201, 203, 207, 0.7)'
          ],
          borderColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(255, 206, 86)',
            'rgb(75, 192, 192)',
            'rgb(153, 102, 255)',
            'rgb(255, 159, 64)',
            'rgb(201, 203, 207)'
          ],
          borderWidth: 1
        }]
      };

      const dailyCtx = document.getElementById('dailyRevenueChart').getContext('2d');
      new Chart(dailyCtx, {
        type: 'bar',
        data: dailyData,
        options: {
          responsive: true,
          scales: {
            y: {
              beginAtZero: true,
              ticks: {
                callback: function(value) {
                  return new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND', maximumFractionDigits: 0 }).format(value);
                }
              }
            }
          },
          plugins: {
            tooltip: {
              callbacks: {
                label: function(context) {
                  return new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND', maximumFractionDigits: 0 }).format(context.parsed.y);
                }
              }
            }
          }
        }
      });
    });
  </script>
@endsection