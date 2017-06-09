[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Unplugg/functions?utm_source=RapidAPIGitHub_UnpluggFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)
# Unplugg Package

* Domain: [unplu.gg](https://unplu.gg)
* Credentials: accessToken

## How to get credentials:
1. Navigate to [https://unplu.gg](https://unplu.gg/test_api.html)
2. Enter you e-mail
3. Access token will be sent to your address
## Unplugg.getForecast
With Unplugg’s API you can request a forecast based on a provided timeseries. 

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Unplugg access token
| timestamp  | Number     | Timestamps in Unix time format.
| value      | String     | Integer or float value for specified timestamp.
| callback   | String     | Link to which the job payload will be sent
| forecastTo | String     | Timestamps in Unix time format (seconds)

