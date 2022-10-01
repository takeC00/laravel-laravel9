/**
 * @api {post} /user/:id ユーザー取得
 * @apiVersion 0.1.0
 * @apiName ユーザー取得
 * @apiGroup User
 *
 * @apiParam {Number} id ユーザーのユニークID.
 *
 * @apiSuccess {String} firstname 名前.
 * @apiSuccess {String} lastname  苗字.
 *
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK
 *     {
 *       "firstname": "John",
 *       "lastname": "Doe"
 *     }
 *
 * @apiError UserNotFound ユーザーが見つからないとき.
 *
 * @apiErrorExample Error-Response:
 *     HTTP/1.1 404 Not Found
 *     {
 *       "error": "UserNotFound"
 *     }
 */
function getUser(id) {
  //関数の中身は適当
  return "ユーザー情報";
}
