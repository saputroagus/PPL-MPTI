<php 
namespace App;
use Illuminate\Database\Eloquent\Model;

class mHewan extends Model{
 protected $fillable = [
        'JenisHewan', 'harga', 'bobot','umur','lokasi','deskripsi','biayaperawatan','biayapakan'
    ];
    
}
?>