

namespace {!! $namespace !!};

use {!! $resource !!}\Pages;
use {!! $resource !!}\RelationManagers;
use App\Models\{!! $model !!};
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class {!! $resourceClass !!} extends Resource
{
    protected static ?string $model = {!! $modelClass !!}::class;{!! $icon !!}
{!! $navigationGroup !!}
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
{!! $formSchema !!}
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
{!! $tableColumns !!}
            ])
            ->filters([
{!! $tableFilters !!}
            ])
            ->actions([
{!! $tableActions !!}
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
{!! $tableBulkActions !!}
                ]),
            ]);
    }
{!! $relations !!}
    public static function getPages(): array
    {
        return [
{!! $pages !!}
        ];
    }{!! $eloquentQuery !!}
}
