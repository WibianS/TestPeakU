use PHPUnit\Framework\TestCase;
use App\Math;

class MathTest extends TestCase
{
    public function User(): void
    {
        $log = new Login();
        $result = $log->add('mail@mail.com', '123abc');

        $this->assertEquals(5, $result, "no se encuentra en la base de datos");
    }
}