<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Catalog</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .product-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 16px;
            margin: 16px 0;
            display: flex;
            align-items: center;
        }
        .product-image {
            max-width: 100px;
            margin-right: 16px;
        }
        .product-details {
            flex: 1;
        }
        .product-name {
            font-size: 1.25rem;
            font-weight: bold;
        }
        .product-description {
            margin: 8px 0;
        }
        .product-price {
            color: green;
            font-weight: bold;
        }
        .history-section {
            margin-bottom: 32px;
        }
        .history-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 16px;
        }
        .history-content {
            font-size: 1rem;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <x-header></x-header>
    <x-sidebar></x-sidebar>
    
    <main id="main" class="main">    
        <section class="section">
          <div class="row flex justify-center">
            <div class="col-lg-10">
    
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Product Catalog</h5>

                  <div class="history-section">
                    <div class="history-title">Zenys Pinangat</div>
                    <div class="history-content">
                      Zeny’s Pinangat is a 41-year-old street food legacy owned/mastered by Nocedo Family (started as early as 1982) located at the Province of Albay, Municipality of Camalig. Their product “Pinangat“ is the town’s culinary icon and
                      One Town One Product blue plate, so to speak, it has gained international acceptance, and become an Albayano or Bikolano signature dish gastronomic delight. And make it to the 22nd ranked spot in World Street food Master List.
                    </div>
                  </div>

                  @php
                    $products = [
                      ['name' => 'Classic Pinangat', 'description' => 'Classic', 'price' => '50.00', 'image' => asset('/public/img/pinangat.jpg')],
                      ['name' => 'Spicy Pinangat', 'description' => 'Spicy', 'price' => '55.00', 'image' => asset('/public/img/pinangat.jpg')],
                    ];
                  @endphp
                  @foreach ($products as $product)
                    <div class="product-card">
                      <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="product-image">
                      <div class="product-details">
                        <div class="product-name">{{ $product['name'] }}</div>
                        <div class="product-description">{{ $product['description'] }}</div>
                        <div class="product-price">{{ $product['price'] }}</div>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
              
            </div>
          </div>
        </section>
    </main>
</body>
</html>