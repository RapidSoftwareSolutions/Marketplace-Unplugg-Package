[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Unplugg/functions?utm_source=RapidAPIGitHub_UnpluggFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)
# Unplugg Package

* Domain: [unplu.gg](https://unplu.gg)
* Credentials: accessToken

## How to get credentials:
1. Navigate to [https://unplu.gg](https://unplu.gg/test_api.html)
2. Enter your e-mail
3. Access token will be sent to your address

## Custom datatypes:
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]```
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```

## Webhook credentials
 Please use SDK to test this feature.
 0. Go to [RapidAPI](http://rapidapi.com)
 1. Log in or create an account
 2. Go to [My apps](https://dashboard.rapidapi.com/projects)
 3. Add new project with projectName to get your project Key

 | Field      | Type       | Description
 |------------|------------|----------
 | projectName     | credentials| Your RapidAPI project name
 | projectKey | credentials     | Your RapidAPI project key


## Unplugg.getForecast
With Unplugg’s API you can request a forecast based on a provided timeseries.
Create a new webhook. You can use our service as webhookUrl:
```https://webhooks.rapidapi.com/api/message/Unplugg/forecastCommand/{projectName}/{projectKey}``` * see credentials description above

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Unplugg access token
| timestamp  | Number     | Timestamps in Unix time format.
| value      | String     | Integer or float value for specified timestamp.
| callback   | String     | Link to which the job payload will be sent
| forecastTo | String     | Timestamps in Unix time format (seconds)

