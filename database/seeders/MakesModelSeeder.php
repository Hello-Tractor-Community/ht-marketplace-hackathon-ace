<?php

namespace Database\Seeders;
;
use App\Models\VehicleMake;
use App\Models\VehicleModel;
use App\Models\VehicleType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class MakesModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contents = File::get(public_path('makesmodels.json'));
        $makesmodels = json_decode(json: $contents, associative: true);
        foreach ($makesmodels as $maked) {
            $make = VehicleMake::where('name',$maked['make'])->first();
            if($make == null){
                $make = new VehicleMake();
                $make->name = $maked['make'];
                $make->save();
                foreach($maked['models'] as $models){
                    $model = VehicleModel::where('name',$models)->where('make_id',$make->id)->first();
                    if($model == null){
                        $model = new VehicleModel();
                        $model->name = $models;
                        $model->make_id = $make->id;
                        $model->save();
                    }
                }
            }
            
            
        }

        $tractorTypes = [
            [
                "name" => "Utility Tractors",
                "description" => "General-purpose tractors suitable for plowing, pulling, and other farming tasks."
            ],
            [
                "name" => "Row Crop Tractors",
                "description" => "Specialized tractors designed for row crop farming with adjustable wheels and high ground clearance."
            ],
            [
                "name" => "Orchard Tractors",
                "description" => "Compact and low-profile tractors for use in vineyards and orchards."
            ],
            [
                "name" => "Compact Tractors",
                "description" => "Small, lightweight tractors for landscaping and small farming operations."
            ],
            [
                "name" => "Industrial Tractors",
                "description" => "Heavier tractors used for industrial or construction work, like earth moving."
            ],
            [
                "name" => "Garden Tractors",
                "description" => "Smaller tractors for residential lawn care and garden maintenance."
            ],
            [
                "name" => "Implement Carrier Tractors",
                "description" => "Designed to carry and operate implements directly on the tractor body."
            ],
            [
                "name" => "Track Tractors",
                "description" => "Tractors with tracks instead of wheels, ideal for wet or uneven terrain."
            ],
            [
                "name" => "Earth Moving Tractors",
                "description" => "Heavy-duty tractors for large-scale construction or earth-moving operations."
            ],
            [
                "name" => "Four-Wheel Drive Tractors",
                "description" => "Large tractors with four-wheel drive for heavy-duty tasks on tough terrain."
            ]
        ];
        
        foreach ($tractorTypes as $types) {
           $type = VehicleType::where('name',$types['name'])->first();
           if($type == null){
            $type = new VehicleType();
            $type->name = $types['name'];
            $type->description = $types['description'];
            $type->save();
           }
        }
        
    }
}
