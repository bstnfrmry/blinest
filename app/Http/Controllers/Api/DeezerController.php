<?php

namespace App\Http\Controllers\Api;

use App\Track;
use App\Game;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeezerController extends Controller
{
 
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {

        $query = filter_var ( $request->q, FILTER_SANITIZE_STRING);
        $query = trim ( $query );
        $query = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $query);
        $query = str_replace(' ', '+', $query);

        $url = 'https://api.deezer.com/search/track?q=' . $query;

        try {
            $json = json_decode(file_get_contents($url, false), true);
        }
        catch (Exception $e) {
            return response()->json($e->getMessage());
        }

        return response()->json($json);

    }

    public function addPlaylist(Request $request)
    {

        $url = 'https://api.deezer.com/playlist/'. $request->q;

        try {
            $json = json_decode(file_get_contents($url), true);
        }
        catch (Exception $e) {
            return response()->json($e->getMessage());
        }

        return response()->json($json);

    }

    public function storePlaylist(Request $request)
    {

        $game = Game::find($request->params['game_id']);
        $user = auth()->user();


        // GET THE PLAYLIST
        $url = 'https://api.deezer.com/playlist/'. $request->playlist_id;

        try {
            $playlist = json_decode(file_get_contents($url, false), true);
        }
        catch (Exception $e) {
            return response()->json($e->getMessage());
        }


        if ($user->isModerator($game) || $user->id == $game->user_id) {

            try {

                $tracks = [];

                foreach ($playlist['tracks']['data'] as $track) {

                    if($track['preview']) {

                        $item = new Track([
                            'user_id' => $user->id,
                            'game_id' => $request->params['game_id'],
                            'provider_item_id' => $track['id'],
                            'provider' => 'deezer',
                            'artist_name' => $track['artist']['name'],
                            'track_name' => $track['title_short'],
                            'artwork_url' => $track['album']['cover_medium'],
                            'preview_url' => $track['preview'],
                        ]);


                        $item->save();

                        $tracks[] = $item;

                    }

                }

                return response()->json([
                    'tracks' => $tracks,
                    'success' => true,
                ]);

            }
            
            catch (Exception $e) {
                return response()->json($e->getMessage());
            }

            return response()->json($json);

        } else {

            return response()->json("Utilisateur non autorisé.");
        }

    }

}